<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use App\Role;

use Auth;
use App\Helpers\Checker;
use Config;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $table = "users";

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if(!Checker::checkAcces($this->table,debug_backtrace()[0]["function"])) {return redirect()->back();}

        $users = User::where('id', '!=', Auth::user()->id)->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if(!Checker::checkAcces($this->table,debug_backtrace()[0]["function"])) {return redirect()->back();}
        $roles = Role::all();
        return view('admin.users.create',compact('roles'));
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
        if(!Checker::checkAcces($this->table,debug_backtrace()[0]["function"])) {return redirect()->back();}

        
        $requestData = array_merge($request->all(), ['userc' => Auth::user()->id ,'userm' => Auth::user()->id ,"password" => bcrypt($request->input('password'))]);
        
        User::create($requestData);

        return redirect(url(config::get('constants.ADMIN_PATH').'users'))->with('flash_message', 'Utilisateur ajouté avec Succès !');

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
        if(!Checker::checkAcces($this->table,debug_backtrace()[0]["function"])) {return redirect()->back();}

        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
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
        if(!Checker::checkAcces($this->table,debug_backtrace()[0]["function"])) {return redirect()->back();}

        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('admin.users.edit', compact('user','roles'));
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
        if(!Checker::checkAcces($this->table,debug_backtrace()[0]["function"])) {return redirect()->back();}

        $newPassword = $request->input('password');
        $request->request->remove('password');
        
        $requestData = array_merge($request->all(), ['userm' => Auth::user()->id ]);

        if ( $request->input('mycheckbox')) 
        {
            $requestData['password'] = bcrypt($newPassword);
        }
        
        $user = User::findOrFail($id);
        $user->update($requestData);

        return redirect(url(config::get('constants.ADMIN_PATH').'users'))->with('flash_message', 'Utilisateur modifié avec Succès !');
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
        if(!Checker::checkAcces($this->table,debug_backtrace()[0]["function"])) {return redirect()->back();}

        User::destroy($id);

        return redirect(url(config::get('constants.ADMIN_PATH').'users'))->with('flash_message', 'Utilisateur supprimé avec success !');
    }
}
