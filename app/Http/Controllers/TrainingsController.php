<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CourseCategory;
use Input;
use DB;
use View;
use Validator;
use App\Training;
use Crypt;

class TrainingsController extends Controller
{
   function __construct(){
        $this->middleware('auth');
        $this->module = 'training';
        $this->table = 'trainings';

        $this->index_title = "Trainings";
        $this->eloquentModel = new Training();
        $this->controller = $this;
   }

    public function getIndex()
    {

        $coursecategories = CourseCategory::all();

        $response = array(
                            'controller'        => $this->controller ,
                            'title'             => $this->index_title,
                            'module'            => $this->module,
                            'coursecategories'  => $coursecategories

                            );

        return view('schedule.training.index',$response);
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

            $trainings = $this->get_records($filters,$q,$limit);

    
          $response = array(
                            'controller' => $this->controller ,
                            'title'      => $this->index_title,
                            'module'     => $this->module,
                            'trainings'  => $trainings,
                            );

        return view('schedule.training.datatable',$response);
   }


   public function get_records($filters,$q,$limit)
   {
    $cols = $this->table_columns($this->table);

    // $query = new $this->eloquentModel();

    $query = Training::with('course_categories')->orderBy('created_at','desc');

    //                     ->paginate($limit);
 
     $query = $query->where(function($query) use($cols, $q){

                foreach ($cols as $key => $value) {
                    $query = $query->orWhere($value,'like','%'.$q.'%');
                }
        });

    if(@$filters['status'] == 1){
        $query = $query->where('trainings.deleted_at');

    }

    if(@$filters['status'] == 2){
        $query = $query->withTrashed()->whereNotNull('trainings.deleted_at');
    }

    $Response = $query -> paginate($limit);

    // dd($Response);

    return $Response;

   }


    public function getCreate()
    {

        $coursecategories = CourseCategory::all();

          $response = array(
                            'controller'        => $this->controller ,
                            'title'             => $this->index_title,
                            'module'            => $this->module,
                            'coursecategories'  => $coursecategories

                            );

        return view('schedule.training.create',$response);
    }

 
    public function postStore(Request $request)
    {
        // if(Input::get('filters')){
        //     parse_str(Input::get('filters'),$filters);
        // }else{
        //     $filters = "";
        // }

        $data = Input::all();

        // dd($data);
        $model = new $this->eloquentModel($data);

        $res = $model->save();

        // $training = new Training;
        // $training->course_code = $filters['coursecode'];
        // $training->course_title = $filters['coursetitle'];
        // $training->duration = $filters['duration'];

        // $filters['date'] = explode('</br>',$filters['dates']);

        // $dates[] = ($filters['date']);


        // foreach ($dates as $date) {
        //     // dd($date);
        //     $training->date = $date;
        //     $training->save();
        // }

        // dd($filters['date'][0]);

        // $training->date = $filters['dates'];
        // $training->course_category = $filters['course_category'];
        // $res = $training->save();

        // dd($res);

        if($res){
            $response = json_encode(['status' => true,'response'=>'Saving was successful!']);
        }else{
            $response = json_encode(['status' => false,'response'=>'Saving Failed!']);
        }

        return $response;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function getEdit($id)
    {
        $id = Crypt::decrypt($id);

        // $result = DB::table($this->table)
        //                     ->where('id',$id)
        //                     ->first();


        $trainings = Training::with('course_categories')
                        ->where('id',$id)
                        ->first();

        $coursecategories = CourseCategory::all();


        $response = array(
                    'controller' => $this->controller,
                    'title'      => $this->index_title,
                    'module'     => $this->module,
                    'trainings'     => $trainings,
                    'coursecategories'  => $coursecategories
                );

        return view('schedule.'.$this->module.'.edit',$response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request)
    {
        $data = Input::all();

        $data['id'] = Crypt::decrypt($data['id']);

        $model = new $this->eloquentModel($data);

        $res = $model->find($data['id'])->update($data);

        if($res){
            $response = json_encode(['status' => true,'response' => 'Saving successful!']);
        }else{
            $response = json_encode(['status' => false,'response' => 'Saving failed!']);
        }

        return $response;

    }

 
    public function postDestroy()
    {
        $form_data = Input::all();

        $data = array();
        foreach ($form_data['data'] as $key => $value) {
            array_push($data, Crypt::decrypt($value));
        }

        $res = $this->hardDelete($data);
        if($res){ echo 'deleted'; }
    }

    private function softDelete($data){

        $model = new $this->eloquentModel;

        return $model::whereIn('id',$data)->update(['deleted_at'=>date('Y-m-d H:i:s')]);
    }

    private function hardDelete($data){
        
        $res = DB::table($this->table)
                        ->whereIn('id',$data)
                        ->delete();

        return $res;
    }

    public function getActivate(){

        $id = Input::get('id');
        $id = Crypt::decrypt($id);

        // $deleted_by = 0;

        $res = Training::onlyTrashed()->where('id',$id)->restore();

        if($res){
            $response = json_encode(['status'=>true, 'response'=>'Activate Sucessful!']);
        }else{
            $response = json_encode(['status'=>true, 'response'=>'Activate failed!']);
        }
        return $response;
    }

}
