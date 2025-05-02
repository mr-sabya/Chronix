<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // show the home page
    public function index()
    {
        $theme = 6;
        return view('frontend.home.index', compact('theme'));
    }
}
