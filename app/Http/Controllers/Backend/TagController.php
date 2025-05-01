<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //list of tag
    public function index()
    {
        $title = "Tag";
        return view('backend.tag.index', compact('title'));    
    }
}
