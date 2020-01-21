<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::when($request->search, function($query) use($request) {
                        $search = $request->search;
                        
                        return $query->where('title', 'like', "%$search%")
                            ->orWhere('body', 'like', "%$search%");
                    })->with('tags', 'categories', 'user')
                    ->withCount('comments')
                    ->published()
                    ->simplePaginate(5);
                    
        return view('frontend.index', compact('posts'));
    }

    public function post($slug)
    {
        if(is_numeric($slug)){
            $post = Post::find($slug);
        }else {
            $post = Post::where('slug', $slug)->first();
        }
        $post = $post->load(['comments.user', 'tags', 'user', 'categories']);
        $post->body = str_replace("src=\"/img/", "src=\"".env("APP_CDN")."/img/", $post->body); //cdn images

        $categories = array();
        foreach(array("Category", "Type", "Source", "Brand") as $le){
            $column = array();
            foreach($post->categories as $c){
                if($c->type == $le){
                    $column[] = $c;
                }
            }
            $categories[$le] = $column;
        }
        return view('frontend.post', compact('post', 'categories'));
    }
    
    public function category($name)
    {
        $category = "";
        if(is_numeric($name)){
            $posts = Category::find($name)->posts();
        }else {
            $category = $name;
            $posts = Category::where('Name', $name)->first()->posts();
        }
        $posts = $posts->with('tags', 'categories', 'user')
            ->withCount('comments')
            ->published()
            ->simplePaginate(5);
            
        return view('frontend.index', compact('posts', 'category'));
    }

    public function comment(Request $request, Post $post)
    {
        $this->validate($request, ['body' => 'required']);

        $post->comments()->create([
            'body' => $request->body
        ]);
        flash()->overlay('Comment successfully created');

        return redirect("/posts/{$post->id}");
    }
}
