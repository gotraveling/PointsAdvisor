<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function account() {
        $userCheck = Auth::check();
        $userData = [];

        if($userCheck){
            $userData = Auth::user();
        }

        $data = array(
            "status" => $userCheck,
            "data" => $userData
        );
        return view('account')->with('data', $data);
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return response()->json(true);
        }
    }

    public function logout(Request $request) {
        Auth::logout();
    }



    
}
