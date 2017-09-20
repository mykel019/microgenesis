<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CourseCategory;
use Input;
use Crypt;
use DB;

class CourseCategoryController extends Controller
{
     function __construct(){
        $this->middleware('auth');
        $this->module = 'coursecategory';
        $this->table = 'course_categories';

        $this->index_title = "CourseCategories";
        $this->eloquentModel = new CourseCategory();
        $this->controller = $this;
   }


    public function getIndex()
    {

        $coursecategories = CourseCategory::all();
        // dd($coursecategories)

        $response = array(
                    'controller' => $this->controller ,
                    'title'      => $this->index_title,
                    'module'     => $this->module,
                    'coursecategories' => $coursecategories,
                    );


        return view('coursecategory.index',$response);
    }

    public function getDatatable()
    {
        $q = Input::get('q');
        if(Input::get('filters')){
            parse_str(Input::get('filters'),$filters);
        }else{
            $filters = "";
        }

        if(empty($limit)){ $limit = 10; } //default

        $coursecategories = $this->get_records($filters,$q,$limit);

        // $coursecategories = $coursecategories->toArray();
        // dd($coursecategories);

        $response = array(
                    'controller' => $this->controller ,
                    // 'cols'      =>  $this->table_columns($this->table),
                    'title'      => $this->index_title,
                    'module'     => $this->module,
                    'coursecategories' => $coursecategories
                    );


        return view($this->module.'.datatable',$response);
    }

    public function get_records($filters,$q,$limit){


        $cols = $this->table_columns($this->table);

        $query = new $this->eloquentModel();

        // dd($query);

        // $query = $query::withTrashed();

        // $query = CourseCategory::paginate($limit);

        $query = $query->where(function($query) use($cols, $q){

                foreach ($cols as $key => $value) {
                    $query = $query->orWhere($value,'like','%'.$q.'%');
                }
        });

        if(@$filters['coursestatus'] == 1){
            $query = $query->where('course_categories.deleted_at');
        }

        if(@$filters['coursestatus'] == 2){
            $query = $query->withTrashed()->whereNotNull('course_categories.deleted_at');
        }


        $Response = $query -> paginate($limit);

        // dd($Response->toArray());

        return $Response;        
    }

   
    public function getCreate()
    {

        $response = array(
                    'controller' => $this->controller ,
                    'title'      => $this->index_title,
                    'module'     => $this->module,

                    );


        return view('coursecategory.create',$response);
    }


    public function postStore(Request $request)
    {
        // $data = Input::get('coursecategory');

        $data = Input::all();

        // dd($data);

       $model = new $this->eloquentModel;

       $model->course_name = $data['course_name'];

        $res = $model->save();

        // dd($model);
        // $res = $model->save();
        // if(Input::get('filters')){
        //     parse_str(Input::get('filters'),$filters);
        // }else{
        //     $filters = "";
        // }
        // $coursecategory = new CourseCategory;
        // $coursecategory->course_name = $data;
        // $res = $coursecategory->save();

        if($res){
            $response = json_encode(['status' => true,'response'=>'Saving was successful!']);
        }else{
            $response = json_encode(['status' => false,'response'=> 'Saving Failed!']);
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
        //
    }

    
    public function getEdit($id)
    {

        $id = Crypt::decrypt($id);

        $result = DB::table($this->table)
                            ->where('id',$id)
                            ->first();

        $response = array(
                  'controller'  => $this->controller ,
                   'title'      => $this->index_title,
                   'module'     => $this->module,
                   'result'     => $result

                 );
        return view($this->module.'.edit',$response);
        
    }

  
    public function postUpdate(Request $request)
    {
        $data = Input::all();

        $data['id'] = Crypt::decrypt($data['id']);

        $res = DB::table('course_categories')
                    ->where('id',$data['id'])
                    ->update(['course_name' => $data['coursecategory']]);

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

    public function softDelete($data){

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

        // dd($id);

        // $id = Crypt::decrypt($id);

        // $deleted_by = 0;

        // $res = CourseCategory::onlyTrashed()->where('id',$id)->restore();

        // $query = new $this->eloquentModel();

        // $res = $query -> onlyTrashed()->where('id',$id)->restore();

        
        // $res = DB::table('course_categories')->onlyTrashed()->where('id',$id)->restore();


        // $res = CourseCategory::onlyTrashed()->find('id',$id)->restore();

         $res = CourseCategory::onlyTrashed()->where('id',$id)->restore();

         // dd($res);

        if($res){
            $response = json_encode(['status'=>true, 'response'=>'Activate Sucessful!']);
        }else{
            $response = json_encode(['status'=>true, 'response'=>'Activate failed!']);
        }

        // return $response;


    
    }

}
