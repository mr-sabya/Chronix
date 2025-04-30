<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //about page
    public function about()
    {
        return view('frontend.pages.about');
    }
}
