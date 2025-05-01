<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // news list
    public function index()
    {
        $title = "News";
        return view('backend.news.index', compact('title'));
    }
}
