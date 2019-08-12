<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use GroceryCrud\Core\GroceryCrud;
use Illuminate\Support\Facades\DB;

class AdminModuleController extends Controller
{
    private function _getDatabaseConnection() {
        $databaseConnection = config('database.default');
        $databaseConfig = config('database.connections.' . $databaseConnection);
        return [
            'adapter' => [
                'driver' => 'Pdo_Mysql',
                'host'  =>$databaseConfig['host'],
                'database' => $databaseConfig['database'],
                'username' => $databaseConfig['username'],
                'password' => $databaseConfig['password'],
                'charset' => 'utf8'
            ]
        ];
    }
    private function _getGroceryCrudEnterprise() {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        return $crud;
    }
    private function _show_output($output) {
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }
        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('adminmodule::ourcoffee', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('adminmodule::dashboard');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function ourcoffee()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('coffe');
        $crud->unsetJquery();
        $crud->unsetBootstrap();
        $crud->setSubject('Coffee', 'Coffes');
        
        // colom tabel coffe/tabel yg mau diambil/value colom
        $crud->setRelation('users_id','users','name'); 
        $crud->displayAs('users_id','name');
        $crud->setFieldUpload('pict', 'uploader/coffee', ''.url('/').'/uploader/coffee');
        $crud->callbackColumn('pict',function($value,$row){
            return "<img src='".url('/')."/uploader/coffee/".$row->pict."' style='width:200px;' />";
        });

        $output = $crud->render();
        return $this->_show_output($output);    
    }

    public function create()
    {
        return view('adminmodule::create');
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
        return view('adminmodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('adminmodule::edit');
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
