<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
}
