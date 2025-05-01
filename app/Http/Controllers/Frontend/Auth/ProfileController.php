<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // show profile page
    public function index()
    {
        return view('frontend.profile.index');    
    }
}
