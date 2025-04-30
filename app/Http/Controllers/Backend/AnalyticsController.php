<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    // show analytics
    public function index()
    {
        return view('backend.analytics.index');
    }
}
