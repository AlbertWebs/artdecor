<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Arts & Decor | Portraits Drawings Wallpapers in Nairobi";
        $keywords = "Arts, Decors, Wallpapers, Portraits";
        $url = url('/');
        return view('front.index', compact('title','keywords','url'));
    }
}
