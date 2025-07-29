<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function userlogin()
    {
        return view('front.pages.login');
    }

    public function userregister(){
        
        return view('front.pages.register');
    }
}
