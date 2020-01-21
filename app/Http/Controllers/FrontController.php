<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        $userCheck = Auth::check();
        $userData = [];

        if($userCheck){
            $userData = Auth::user();
        }

        $data = array(
            "status" => $userCheck,
            "data" => $userData
        );
        return view('landing')->with('data', $data);
    }

    public function blog_list() {
        return view('bloglist');
    }

    public function blog_article() {
        return view('blogarticle');
    }

    public function login_test() {
        return view('login_test');
    }
}
