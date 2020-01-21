<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['user', 'categories', 'tags', 'comments'])->paginate(10);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth()->user()->hasRole("admin")) {
            flash()->overlay("You can't edit post.");
            return redirect('/admin/posts');
        }
        $categories = Category::where('type', 'Category')->pluck('name', 'id')->all();
        $types = Category::where('type', 'Type')->pluck('name', 'id')->all();
        $sources = Category::where('type', 'Source')->pluck('name', 'id')->all();
        $brands = Category::where('type', 'Brand')->pluck('name', 'id')->all();
        $tags = Tag::pluck('name', 'name')->all();
        
        $category_id = $type_ids = $source_ids = $brand_ids = null;

        return view('admin.posts.create', compact('categories', 'types', 'tags', 'sources', 'brands', 'category_id', 'type_ids', 'source_ids', 'brand_ids'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $matches = array();
        preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $request->featured_img, $matches);
        if($matches) $featured_img = $matches[1];
        else $featured_img = '';
        $post = Post::create([
            'title'       => $request->title,
            'slug'       => $request->slug,
            'body'        => $request->body,
            'add_html'       => $request->add_html,
            'featured_img' => $featured_img,
            'expiry_date' => $request->expiry_date
        ]);
    
        $categories = array();
        $categories[] = $request->category_id;
        $levels = array("Type" => $request->type_ids, "Source" => $request->source_ids, "Brand" => $request->brand_ids);
        foreach($levels as $k => $ids){
            foreach( $ids as $c) {
                if(is_numeric($c)) $categories[] = $c;
                elseif($c){
                    $categories[] = Category::firstOrCreate(['name' => $c, 'type' => $k])->id;
                }
            }
        }
        $post->categories()->sync($categories);
        
        $tagsId = collect($request->tags)->map(function($tag) {
            return Tag::firstOrCreate(['name' => $tag])->id;
        });
        $post->tags()->attach($tagsId);
        
        flash()->overlay('Post created successfully.');

        return redirect('/admin/posts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if(!auth()->user()->hasRole("admin")) {
            flash()->overlay("You can't edit post.");
            return redirect('/admin/posts');
        }

        if($post->featured_img) $post->featured_img = "<img src=\"" . $post->featured_img . "\">";
        if($post->expiry_date) $post->expiry_date = date("Y-m-d\Th:i", strtotime($post->expiry_date));  //2020-01-16T13:01
        $categories = Category::where('type', 'Category')->pluck('name', 'id')->all();
        if(isset($post)) {
            $category_id = $post->categories->pluck('id')->all();
        } else {
            $category_id = null;
        }
        
        //dd(print_r($category_id, true));
    
        $types = Category::where('type', 'Type')->pluck('name', 'id')->all();
        if(isset($post)) {
            $type_ids = $post->categories->pluck('id')->all();
        } else {
            $type_ids = null;
        }
        
        $sources = Category::where('type', 'Source')->pluck('name', 'id')->all();
        if(isset($post)) {
            $source_ids = $post->categories->pluck('id')->all();
        } else {
            $source_ids = null;
        }
        
        $brands = Category::where('type', 'Brand')->pluck('name', 'id')->all();
        if(isset($post)) {
            $brand_ids = $post->categories->pluck('id')->all();
        } else {
            $brand_ids = null;
        }
        
        $tags = Tag::pluck('name', 'name')->all();

        return view('admin.posts.edit', compact('post', 'types', 'categories', 'category_id', 'tags', 'type_ids', 'sources', 'source_ids', 'brands', 'brand_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $matches = array();
        preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $request->featured_img, $matches);
        if($matches) $featured_img = $matches[1];
        else $featured_img = '';
        $post->update([
            'title'       => $request->title,
            'slug'       => $request->slug,
            'body'        => $request->body,
            'add_html'       => $request->add_html,
            'featured_img' => $featured_img,
            'expiry_date' => $request->expiry_date
        ]);

        $categories = array();
        $categories[] = $request->category_id;
        $levels = array("Type" => $request->type_ids, "Source" => $request->source_ids, "Brand" => $request->brand_ids);
        foreach($levels as $k => $ids){
            foreach( $ids as $c) {
                if(is_numeric($c)) $categories[] = $c;
                elseif($c){
                    $categories[] = Category::firstOrCreate(['name' => $c, 'type' => $k])->id;
                }
            }
        }
        $post->categories()->sync($categories);
        
        $tagsId = collect($request->tags)->map(function($tag) {
            return Tag::firstOrCreate(['name' => $tag])->id;
        });

        $post->tags()->sync($tagsId);
        flash()->overlay('Post updated successfully.');

        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(!auth()->user()->hasRole("admin")) {
            flash()->overlay("You can't edit post.");
            return redirect('/admin/posts');
        }

        $post->delete();
        flash()->overlay('Post deleted successfully.');

        return redirect('/admin/posts');
    }

    public function publish(Post $post)
    {
        $post->is_published = !$post->is_published;
        $post->save();
        flash()->overlay('Post changed successfully.');

        return redirect('/admin/posts');
    }
}
