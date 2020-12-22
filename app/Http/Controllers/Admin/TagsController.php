<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Config;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $tags = Tag::where('libelle', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tags = Tag::latest()->paginate($perPage);
        }
         $tags = Tag::all();

        return view('admin/tag.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/tag.tags.create');
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
        
        $requestData = $request->all();
        
        Tag::create($requestData);

        return redirect(url(config::get('constants.ADMIN_PATH').'tags'))->with('flash_message', 'Tag added!');
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
        $tag = Tag::findOrFail($id);

        return view('admin/tag.tags.show', compact('tag'));
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
        $tag = Tag::findOrFail($id);

        return view('admin/tag.tags.edit', compact('tag'));
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
        
        $requestData = $request->all();
        
        $tag = Tag::findOrFail($id);
        $tag->update($requestData);

        return redirect(url(config::get('constants.ADMIN_PATH').'tags'))->with('flash_message', 'Tag updated!');
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
        Tag::destroy($id);

        return redirect('admin/tags')->with('flash_message', 'Tag deleted!');
    }
}
