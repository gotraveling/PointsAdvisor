<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    private $base_path;
    
    function __construct() {
        $this->base_path = public_path().'/img/uploads/'; 
    }
    public function images(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return response()->json(Image::all());
    }
    
    public function image_upload(Request $request)
    {
        $input = $request->all();
        $file = $input['file_data'];
        $dir = $this->base_path.($bdir=date('Y/m'));
        if(!file_exists($dir)) mkdir($dir, 0777, true);
        $name = uniqid() . '.' . pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $file->move($dir, $name);
        $img = new Image;
        $img->path = $bdir . '/' . $name;
        $img->save();
 
        return response()->json(array(
            "initialPreview" => array(),
            "initialPreviewConfig" => array(),
            "initialPreviewThumbTags" => array(),
            "append" => true));
    }

    public function image_update(Request $request)
    {
        $input = $request->all();
        $img = Image::find($input['id']);
        $img->title = $input['title'];
        $img->description = $input['description'];
        $path = $img->path;
        $pathParts = explode("/", $path);
        $filename = array_pop($pathParts);
        $err = '';
        if($filename <> $input['filename']){
            $dest = implode("/", $pathParts) . "/" . $input['filename'];
            if(!File::exists($this->base_path . $dest)){
                File::move($this->base_path.$path, $this->base_path . $dest);
                $img->path = implode("/", $pathParts) . "/" . $input['filename'];
            }else
                $err = 'File is exists for that name.';
        }
        $img->save();
        if($err) return response()->json(array( 'result' => 0, 'msg' => $err ));
        else return response()->json(array( 'result' => 1 ));
    }
    public function image_delete(Request $request)
    {
        $input = $request->all();
        $img = Image::find($input['id']);
        File::Delete($this->base_path.$img->path);
        $img->delete();
        return response()->json(array( 'result' => 1 ));
    }
}
