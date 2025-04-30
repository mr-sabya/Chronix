<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // show the category page
    public function index()
    {
        $title = "Category";
        return view('backend.category.index', compact('title'));
    }
}
