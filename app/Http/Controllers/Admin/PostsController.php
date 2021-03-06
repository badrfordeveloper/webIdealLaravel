<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use Config;

use App\Post;
use App\Category;
use App\Tag;
use App\postesTags;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index(Request $request)
    {
         $posts = Post::all();

        return view('admin/post.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin/post.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $photo ="";
        if ($request->hasFile('photo')) 
        {
            $photo = $request->photo->store('images');
        }
        
        $requestData = array_merge($request->all(), ['user_id' => Auth::user()->id,'photo'=>$photo]);

        if (  $post=Post::create($requestData)) {
                foreach ($request->post('tags') as $mytag) {
        
                $tag =new postesTags();
                $tag->post_id = $post->id;
                $tag->tag_id = $mytag;
                $tag->save();
                }
               
            }


        return redirect(url(config::get('constants.ADMIN_PATH').'posts'))->with('flash_message', 'Post added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin/post.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $tagsPost=postesTags::where('post_id',$id)->get();
       
        $post = Post::findOrFail($id);


        return view('admin/post.posts.edit', compact('post','tags','tagsPost','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('photo')) 
        {
            $photo = $request->photo->store('images');
            $requestData = array_merge($request->all(), ['photo'=>$photo]);
        }
        else{
            $requestData = $request->all();
        }
                
        $post = Post::findOrFail($id);

        if (  $post->update($requestData)) {

            // delete oldest
             $tagsPost=postesTags::where('post_id',$id)->get();
             foreach ($tagsPost as $tagPost) {
                 postesTags::destroy($tagPost->id);
             }


                foreach ($request->post('tags') as $mytag) {
                    $tag =new postesTags();
                    $tag->post_id = $post->id;
                    $tag->tag_id = $mytag;
                    $tag->save();
                }
        }

        return redirect(url(config::get('constants.ADMIN_PATH').'posts'))->with('flash_message', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Post::destroy($id);
        

        return redirect(url(config::get('constants.ADMIN_PATH').'posts'))->with('flash_message', 'Post deleted!');
    }
}
