<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Config;
use App\Models\Backlink;
use Illuminate\Http\Request;

class BacklinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $backlinks = Backlink::all();

        return view('admin.backlinks.index', compact('backlinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.backlinks.create');
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
        
        Backlink::create($requestData);

        return redirect(Config::get('constants.ADMIN_PATH').'backlinks')->with('flash_message', 'Backlink added!');
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
        $backlink = Backlink::findOrFail($id);

        return view('admin.backlinks.show', compact('backlink'));
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
        $backlink = Backlink::findOrFail($id);

        return view('admin.backlinks.edit', compact('backlink'));
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
        
        $backlink = Backlink::findOrFail($id);
        $backlink->update($requestData);

        return redirect(Config::get('constants.ADMIN_PATH').'backlinks')->with('flash_message', 'Backlink updated!');
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
        Backlink::destroy($id);

        return redirect(Config::get('constants.ADMIN_PATH').'backlinks')->with('flash_message', 'Backlink deleted!');
    }
}
