<?php

namespace App\Http\Controllers\Admin;

use App\Imports\MailingsImport;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Config;
use App\Models\Mailing;
use Illuminate\Http\Request;
use App\Helpers\Checker;

use DB;
use Excel;

class MailingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
     public function index(Request $request)
    {
        if(request()->ajax())
        {
            return datatables()->of(Mailing::all())
                    /*->addColumn('action', function($data){

                         $button = '<div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Actions</button>
                                                <ul class="dropdown-menu">';

                        if(Checker::checkAcces('mailings','edit')) {
                            $button .= '<li><a class="dropdown-item" href="'.url(Config::get('constants.ADMIN_PATH').'mailings/' . $data->id. '/edit') .'" title="Edit Category"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a></li>';
                        }
                        if(Checker::checkAcces('mailings','destroy')) {
                            $button .= '<li>
                                                        <form method="POST" action="'. url(Config::get('constants.ADMIN_PATH').'mailings' . '/' . $data->id) .'" accept-charset="UTF-8" style="display:inline">
                                                            '. method_field('DELETE') .'
                                                            '. csrf_field() .'
                                                            <button type="submit" class="dropdown-item" title="Delete Mailing" onclick="return confirm(\'Voulez vous vraiment supprimer ?\')"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                                        </form>
                                                    </li>';
                        }
                        
                        

                          $button .= ' </ul></div>'  ; */               

                      /*  $button .= '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';*/
                     /*   return $button;
                    })
                    ->rawColumns(['action'])*/
                    ->make(true);
        }

        return view('admin.mailings.index');


      /*  $mailings = Mailing::all();

        return view('admin.mailings.index', compact('mailings'));*/
    }
   /* public function index(Request $request)
    {
       


       $mailings = Mailing::all();

        return view('admin.mailings.index2', compact('mailings'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.mailings.create');
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
        $request->merge(['etat' => "non","nb_email" => 0]);
        $requestData = $request->all();
        
        Mailing::create($requestData);

        return redirect(url(Config::get('constants.ADMIN_PATH').'mailings'))->with('flash_message', 'Mailing added!');
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
        $mailing = Mailing::findOrFail($id);

        return view('admin.mailings.show', compact('mailing'));
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
        $mailing = Mailing::findOrFail($id);

        return view('admin.mailings.edit', compact('mailing'));
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
        
        $mailing = Mailing::findOrFail($id);
        $mailing->update($requestData);

        return redirect(url(Config::get('constants.ADMIN_PATH').'mailings'))->with('flash_message', 'Mailing updated!');
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
        Mailing::destroy($id);

        return redirect(url(Config::get('constants.ADMIN_PATH').'mailings'))->with('flash_message', 'Mailing deleted!');
    }

    public function send_mail(Request $request)
    {
        $dataMails = $pieces = explode(",", $request->input('dataSend')[0]);
      

        foreach ($dataMails as $item) {
            $mailing = Mailing::findOrFail($item);
            $email = $mailing->email;

           $details = [];
            \Mail::to($email)->send(new \App\Mail\SendMail($mailing));

            $mailing->nb_email += 1;
            $mailing->save(); 
            sleep(80);

        }
        return redirect(url(Config::get('constants.ADMIN_PATH').'mailings'))->with('flash_message', 'Les emails envoyé avec success !');
    }

    public function import_excel(Request $request)
    {
        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        Excel::import(new MailingsImport, $request->file('select_file'));

        return redirect(url(Config::get('constants.ADMIN_PATH').'mailings'))->with('flash_message', 'Les emails imports success !');
    }

    public function testMailings()
    {
        $mailings = Mailing::where('nb_email','=',0)->get();

        return view('admin/mailings.test', compact('mailings'));
       dd('ok');
    }

     public function sendTestMailings(Request $request)
    {

            $mailing = Mailing::where('nb_email','=',0)->first();
            
            $email = $mailing->email;

            \Mail::to($email)->send(new \App\Mail\SendMail($mailing));

            $mailing->nb_email += 1;
            $mailing->save(); 
            return $email;
  
    }
}
