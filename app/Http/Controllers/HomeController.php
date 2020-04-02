<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $page = "index";
        return view('public.index',compact('page'));
    }
     public function about()
    {
        $page = "apropos";
        return view('public.about',compact('page'));
    }
     public function services()
    {
        $page = "services";
        return view('public.services',compact('page'));
    }
     public function portfolio()
    {
        $page = "portfolio";
        return view('public.portfolio',compact('page'));
    }
     public function contact()
    {
        $page = "contact";
        return view('public.contact',compact('page'));
    }
    
}
