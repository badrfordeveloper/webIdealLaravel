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
        return view('public.index');
    }
     public function about()
    {
        return view('public.about');
    }
     public function services()
    {
        return view('public.services');
    }
     public function portfolio()
    {
        return view('public.portfolio');
    }
     public function contact()
    {
        return view('public.contact');
    }
    public function blog()
    {
        return view('public.blog');
    }
}
