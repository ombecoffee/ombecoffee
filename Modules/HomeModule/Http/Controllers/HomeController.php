<?php

namespace Modules\Home\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data['projects']=Project::limit(3)->get();
        $data['projectscount'] = DB::table('project')->count();
        $data['guidescount'] = DB::table('guides')->count();
        $data['guides']=Project::get_guides()->limit(3)->get();
        return view('home::index', $data);
    }

    public function guides($id){
        $data['guides']=Project::get_guides()->where('Id',$id)->first();
        return view('home::detil_guides',$data);
    }

    public function allguides(){
        $data['guides']=Project::get_guides()->get();
        return view('home::all_guides',$data);
    }

    public function project($id){
        $data['project']=Project::where('idproject',$id)->first();
        return view('home::detil_project',$data);
    }

    public function allproject(){
        $data['project']=Project::get(); 
        return view('home::all_project',$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('home::create');
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
        return view('home::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('home::edit');
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
