<?php

namespace Modules\CareerModule\Http\Controllers;

use App\Careers;
use App\Location;
use App\Mail\MailApplicant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class CareerModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data['careers']=Careers::join('store', 'id_store', '=', 'store_id_store')->get();
        // $data['store']=Location::all();
        return view('careermodule::index',$data);
    }


    public function modal_applicants(Request $request)
    {
        $id=$request->id;
        $data['pelamar']=DB::table('pelamar')->get();
        $data['careers']=DB::table('careers')->where('idcareers',$id)->first();
        $data['store']=DB::table('store')->where('id_store',$id)->first();
        return view('careermodule::ajax.modal_applicants', $data);
    }

    public function entry_applicants(Request $request)
    {
        $app_id = DB::table('pelamar')->insertGetId([
                'nama' => $request->nama,
                'email' => $request->email,
            	'careers_idcareers' => $request->idcareers,
            	'id_store' => $request->id_store
            ]);
        $email_admin = DB::table('email_admin')->get('email');

        $applicant = DB::table('pelamar')->join('careers', 'careers_idcareers', '=', 'idcareers')
                                        ->join('store', 'pelamar.id_store', '=', 'store.id_store')
                                        ->where('idpelamar', $app_id)->first();
        Mail::to($email_admin)->send(new MailApplicant($applicant));
        
        $data['data']=$request->all();
        return $data;
    }

    public function app_email()
    {
        $applicant = DB::table('pelamar')->join('careers', 'careers_idcareers', '=', 'idcareers')
        ->join('store', 'pelamar.id_store', '=', 'store.id_store')
        ->where('idpelamar', 8)->first();

        // Mail::to('mufidahanisa@gmail.com')->send(new MailApplicant($applicant));
        return new MailApplicant($applicant);
    }

    public function create()
    {
        return view('careermodule::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('careermodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('careermodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
