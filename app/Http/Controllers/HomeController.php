<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\postesTags;
use Carbon\Carbon;


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
        $perPage = 25;

        if(!empty(request()->get('cat')))
        {
            $keyword = request()->get('cat');$search="cat";
        }
        elseif (!empty(request()->get('tag'))) 
        {
            $keyword = request()->get('tag');$search="tag";
        }
        elseif (!empty(request()->get('search'))) 
        {
            $keyword = request()->get('search');$search="search";
        }
        elseif (!empty(request()->get('date'))) 
        {
            $keyword = request()->get('date');$search="date";
        }


        if (!empty($keyword)) {
            if($search == "cat")
            {
                $posts = Category::where('libelle', '=', $keyword)->first()->posts;
            }
            elseif ($search == "tag")
            {
                 $postesTags = Tag::where('libelle', '=', $keyword)->first()->postesTags;
                 $posts = array();
                 foreach ($postesTags as $item) 
                 {
                    $posts[] = postesTags::find($item->id)->post;
                 }
            }
            elseif ($search == "date")
            {
                $date = explode("-", $keyword);
                $year = $date[0];
                $month = $date[1];
                $posts = Post::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->latest()->paginate($perPage);
            }
            else
            {
                $posts = Post::where('titre', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
            }
        } else {
            $posts = Post::latest()->paginate($perPage);
        }        
        $categories = Category::all();
        $tags = Tag::all();
        return view('public.blog',compact('posts','categories','tags'));
    }

    public function detailArticle($id,$titre)
    {
        $post = Post::where('id', '=', $id)->where("titre","=",$titre)->firstOrFail();

         return view('public.detail',compact('post'));
    }
}