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
        $crud->setTable('coffee');
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
    public function project()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('project');
        $crud->unsetJquery();
        $crud->unsetBootstrap();
        $crud->setSubject('Project', 'Projects');
        
        // colom tabel coffe/tabel yg mau diambil/value colom
        $crud->setRelation('users_id','users','name'); 
        $crud->displayAs('users_id','name');
        $crud->setFieldUpload('pict', 'uploader/coffee', ''.url('/').'/uploader/coffee');
        $crud->callbackColumn('pict',function($value,$row){
            return "<img src='".url('/')."/uploader/coffee/".$row->pict."' style='width:200px;' />";
        });
        $crud->setTexteditor(['deskripsi']);
        $output = $crud->render();
        return $this->_show_output($output);    
    }
    public function merchkategori()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('merch_kategori');
        $crud->unsetJquery();
        $crud->unsetBootstrap();
        $crud->setSubject('Merch Kategori', 'Merchs');
        
        // colom tabel coffe/tabel yg mau diambil/value colom
        $crud->setRelation('users_id','users','name'); 
        $crud->displayAs('users_id','name');
        // $crud->callbackColumn('merch_name',function($value,$row){
        //     return "<a href='merch/detail/$row->idmerch'>$value</a>";
        // });

        $output = $crud->render();
        return $this->_show_output($output);    
    }
    public function merch()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('merch');
        $crud->unsetJquery();
        $crud->unsetBootstrap();
        $crud->setSubject('Merch', 'Merchs');
        
        // colom tabel coffe/tabel yg mau diambil/value colom
        $crud->setRelation('idmerch_kategori','merch_kategori','merch_name'); 
        $crud->displayAs('Kategori','merch_name');
        $crud->setFieldUpload('pic', 'uploader/merch', ''.url('/').'/uploader/merch');
        $crud->callbackColumn('pic',function($value,$row){
            return "<img src='".url('/')."/uploader/merch/".$row->pic."' style='width:200px;' />";
        });
        $output = $crud->render();
        return $this->_show_output($output);    
    }
   

    public function subscription()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('tada');
        $crud->unsetJquery();
        $crud->unsetBootstrap();
        $crud->setSubject('Subscription', 'tadas');
        
        // colom tabel coffe/tabel yg mau diambil/value colom
        $crud->setRelation('users_id','users','name'); 
        $crud->displayAs('users_id','name');
        $crud->setFieldUpload('gambar', 'uploader/subscription', ''.url('/').'/uploader/subscription');
        $crud->callbackColumn('gambar',function($value,$row){
            return "<img src='".url('/')."/uploader/subscription/".$row->gambar."' style='width:200px;' />";
        });
        $crud->setTexteditor(['deskripsi']);
        
        $output = $crud->render();
        return $this->_show_output($output);    
    }
    public function storelocation()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('store');
        $crud->unsetJquery();
        $crud->unsetBootstrap();
        $crud->setSubject('Store', 'stores');
        
        // colom tabel coffe/tabel yg mau diambil/value colom
        $crud->setRelation('users_id','users','name'); 
        $crud->displayAs('users_id','name');
        $crud->callbackColumn('nama_store',function($value,$row){
            return "<a href='/admin/jadwal/$row->id_store'>$value</a>";
        });
        $crud->setFieldUpload('gambar', 'uploader/storelocation', ''.url('/').'/uploader/storelocation');
        $crud->callbackColumn('gambar',function($value,$row){
            return "<img src='".url('/')."/uploader/storelocation/".$row->gambar."' style='width:200px;' />";
        });

        $output = $crud->render();
        return $this->_show_output($output);    
    }

    public function jadwal($id)
    {
        $data['storeinfo']=DB::table('store')->where('id_store',$id)->first();
        $data['jadwal']=DB::table('jadwal')->where('store_id_store',$id)->get();
        $data['time']=DB::table('time')->get();
        return view('adminmodule::jadwal', $data);
    }

    public function store_jadwal(Request $request)
    {
        $hari=$request->hari;
        $mulai=$request->mulai;
        $akhir=$request->akhir;
        $id_store=$request->id_store;

        DB::table('jadwal')->insert([
                'hari' => $request->hari,
                'jam_buka' => $request->mulai,
            	'jam_tutup' => $request->akhir,
            	'store_id_store' => $request->id_store
            ]);

        $data['data']=$request->all();
        // $data['jadwalinfo']=DB::table('jadwal')->where('id_jadwal',$id)->first();
        return $data;
    }

    public function edit_jadwal(Request $request)
    {
        $data['jadwal']=DB::table('jadwal')
                ->where('idjadwal',$request->idjadwal)
                ->update(['hari' => $request->hari,
                        'jam_buka' => $request->mulai,
            	        'jam_tutup' => $request->akhir,
                        'store_id_store' => $request->id_store
                        ]);
        $data['data']=$request->all();
        return $data;
    }

    public function modal_edit_jadwal(Request $request)
    {
        $id=$request->id;

        $data['time']=DB::table('time')->get();
        $data['jadwal']=DB::table('jadwal')->where('idjadwal',$id)->first();
        return view('adminmodule::ajax.modal_edit', $data);
    }

    public function delete_jadwal(Request $request)
    {
        $id=$request->id;

        DB::table('jadwal')->where('idjadwal',$id)->delete();

        $data['data']=$request->all();
        return $data;
    }

    public function careers()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('careers');
        $crud->unsetJquery();
        $crud->unsetBootstrap();
        $crud->setSubject('Career', 'Careers');

        // colom tabel coffe/tabel yg mau diambil/value colom
        $crud->setRelation('users_id','users','name'); 
        $crud->displayAs('users_id','name');
        $crud->setRelation('store_id_store','store','nama_store'); 
        $crud->displayAs('Nama Store','nama_store');
        $crud->setFieldUpload('gambar', 'uploader/careers', ''.url('/').'/uploader/careers');
        $crud->callbackColumn('gambar',function($value,$row){
            return "<img src='".url('/')."/uploader/careers/".$row->gambar."' style='width:200px;' />";
        });
        $crud->setTexteditor(['deskripsi']);
        $output = $crud->render();
        return $this->_show_output($output);  
    }


    public function applicants()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('pelamar');
        $crud->unsetJquery();
        $crud->unsetBootstrap();
        $crud->setSubject('Applicant', 'Applicants');

        // colom tabel coffe/tabel yg mau diambil/value colom
        $crud->setRelation('careers_idcareers','careers','posisi'); 
        $crud->displayAs('careers_idcareers','Posisi');
        $crud->setRelation('id_store','store','nama_store'); 
        $crud->displayAs('id_store','Nama Store');
        $output = $crud->render();
        return $this->_show_output($output);  
    }
    
    public function early(Request $request)
    {
        $data['early']=DB::table('early')->first();
        return view('adminmodule::editor',$data);
    }

    public function get_early(Request $request)
    {
        $isi=$request->isi;

        DB::table('early')->updateOrInsert(
            [
                'id'=>$request->id
            ],[
                'isi' => $request->editor_earlydays,
            ]
        );

        $data['data']=$request->all();
        return redirect('admin/early');
    }
    public function now(Request $request)
    {
        $data['now']=DB::table('now')->first();
        return view('adminmodule::editor_now',$data);
    }

    public function get_now(Request $request)
    {
        $isi=$request->isi;

        DB::table('now')->updateOrInsert(
            [
                'id'=>$request->id
            ],[
                'isi' => $request->editor_now,
            ]
        );

        $data['data']=$request->all();
        return redirect('admin/now');
    }
    public function people()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('people');
        $crud->unsetJquery();
        $crud->unsetBootstrap();
        $crud->setSubject('People of Ombe', 'Peoples');
        
        // colom tabel coffe/tabel yg mau diambil/value colom
        $crud->setRelation('users_id','users','name'); 
        $crud->displayAs('users_id','name');
        $crud->setFieldUpload('pict', 'uploader/people', ''.url('/').'/uploader/people');
        $crud->callbackColumn('pict',function($value,$row){
            return "<img src='".url('/')."/uploader/people/".$row->pict."' style='width:200px;' />";
        });
        $crud->setTexteditor(['deskripsi']);
        $output = $crud->render();
        return $this->_show_output($output);    
    }
    public function guides()
    {
        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('guides');
        $crud->unsetJquery();
        $crud->unsetBootstrap();
        $crud->setSubject('Coffe Guides', 'Guides');
        $crud->setFieldUpload('pict', 'uploader/guides', ''.url('/').'/uploader/guides');
        $crud->callbackColumn('pict',function($value,$row){
            return "<img src='".url('/')."/uploader/guides/".$row->pict."' style='width:200px;' />";
        });
        
        // colom tabel coffe/tabel yg mau diambil/value colom
        $crud->setRelation('users_id','users','name'); 
        $crud->displayAs('users_id','name');
        $crud->setTexteditor(['step']);
        $output = $crud->render();
        return $this->_show_output($output);    
    }
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
        return view('adminmodule::editor');
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
