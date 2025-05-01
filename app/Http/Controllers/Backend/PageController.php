<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // show page list
    public function index()
    {
        $title = "Pages";
        return view('backend.pages.index', compact('title'));    
    }

    // create new page
    public function create()
    {
        $title = "Create Page";
        return view('backend.pages.create', compact('title'));    
    }
}
