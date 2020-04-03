<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

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
        $keyword = request()->get('cat');
        $perPage = 25;
        if (!empty($keyword)) {
            $posts = Category::where('libelle', '=', $keyword)->first()->posts;
        } else {
            $posts = Post::latest()->paginate($perPage);
        }        
        $categories = Category::all();
        $tags = Tag::all();
        return view('public.blog',compact('posts','categories','tags'));
    }
}
