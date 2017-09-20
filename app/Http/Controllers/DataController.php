<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Data;
use Input;
use Crypt;
use DB;


class DataController extends Controller
{
    function __construct(){
        $this->middleware('auth');
        $this->module = 'data';
        $this->table = 'data';

        $this->index_title = "Data";
        $this->eloquentModel = new Data();
        $this->controller = $this;
   }

    public function getIndex()
    {
        $results = Data::all();

         $response = array(
                            'controller' => $this->controller ,
                            'title'      => $this->index_title,
                            'module'     => $this->module,
                            'results'  => $results

                            );


        return view('data.index',$response);
    }


     public function getDatatable()
   {
            $q = Input::get('q');
            $limit = Input::get('limit');

            if(Input::get('filters')){
                parse_str(Input::get('filters'),$filters);
            }else{
                $filters = "msg";
            }

            if(empty($limit)){ $limit = 10; } //default

            $results = $this->get_records($filters,$q,$limit);

    
          $response = array(
                            'controller' => $this->controller ,
                            'title'      => $this->index_title,
                            'module'     => $this->module,
                            'results'  => $results
                            );

        return view('data.datatable',$response);
   }


   public function get_records($filters,$q,$limit)
   {
    $cols = $this->table_columns($this->table);

    $query = new $this->eloquentModel();

    //                     ->paginate($limit);

     $query = $query->where(function($query) use($cols, $q){

                foreach ($cols as $key => $value) {
                    $query = $query->orWhere($value,'like','%'.$q.'%');
                }
        });


        $Response = $query -> paginate($limit);
     

    // dd($Response);

    return $Response;

   }


    public function getCreate()
    {

            $response = array(
                'controller' => $this->controller ,
                'title'      => $this->index_title,
                'module'     => $this->module,

                );


    return view('data.create',$response);
    }


    public function postStore(Request $request)
    {
        $data = Input::all();

        $model = new $this->eloquentModel($data);

        $res = $model->save();



        if($res){
            $response = json_encode(['status' => true, 'response' => 'Saving was successful']);
        }else{
            $response = json_encode(['status' => false, 'response' => 'Saving Failed']);
        }

        return $response;
    }


    public function show($id)
    {
        
    }

 
    public function getEdit($id)
    {
        $id = Crypt::decrypt($id);

        $result = DB::table($this->table)
                            ->where('id',$id)
                            ->first();

        $response = array(
                    'controller' => $this->controller ,
                    'title'      => $this->index_title,
                    'module'     => $this->module,
                    'result'       => $result
                    );

        return view($this->module.'.edit',$response);
    }       
 
    public function postUpdate(Request $request)
    {
         $data = Input::all();

         // dd($data);

        $data['id'] = Crypt::decrypt($data['id']);

        $model = new $this->eloquentModel($data);

        $res = $model->find($data['id'])->update($data);

        // $res = DB::table('data')
        //             ->where('id',$data['id'])
        //             ->update('data_name' => $data['data_name']]);

        // $model = new $this->eloquentModel($data);

        // // dd($model);

        // $res = $model->find($data['id'])->update(['course_name'=>$data['coursecategory']]);

        if($res){
            $response = json_encode(['status' => true,'response' => 'Saving successful!']);
        }else{
            $response = json_encode(['status' => false,'response' => 'Saving failed!']);
        }

        return $response;
    }


    public function postDestroy($id)
    {
        $form_data = Input::all();
        $data = array();
        foreach ($form_data['data'] as $key => $value) {
            array_push($data, Crypt::decrypt($value));
        }

        $res = $this->hardDelete($data);

        if($res){ echo 'deleted'; }
    }

    private function hardDelete($data){
        
        $res = DB::table($this->table)
                        ->whereIn('id',$data)
                        ->delete();

        return $res;
    }
}
