<?php

namespace Modules\Merch\Http\Controllers;

use App\Merch;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($category=null)
    {
        $data['category']=Merch::get_merch_kategori();
        if(isset($category)){
            $data['merchs']=Merch::where('idmerch_kategori', $category)->get();
        } else {
            $data['merchs']=Merch::all();
        }
        return view('merch::index', $data);  
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('merch::create');
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
        return view('merch::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('merch::edit');
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
