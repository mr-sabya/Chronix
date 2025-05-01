<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // news list
    public function index()
    {
        $title = "News";
        return view('backend.news.index', compact('title'));
    }


    // create new news
    public function create()
    {
        $title = "Add News";
        return view('backend.news.create', compact('title'));    
    }


    // edit news
    public function edit($id)
    {
        $news = News::findOrFail(intval($id));
        $title = "Edit New";
        return view('backend.news.edit', compact('title', 'news'));    
    }
}
