<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Training;
use App\CourseCategory;
use Input;

class TrainingController extends Controller
{


      public function __construct()
    {

        $this->module = 'training';
        $this->table = 'trainings';

        $this->index_title = "Trainings";
        $this->eloquentModel = new Training();
        $this->controller = $this;
    }



    public function getIndex()
    {
          $response = array(
                        'controller' => $this->controller,
                        'title'      => $this->index_title,
                        'module'     => $this->module

        );

    return view('home.redhat.trainings',$response);
}


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        
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

         $coursecategories = CourseCategory::all();

            $trainings = $this->get_records($filters,$q,$limit);

            // dd($trainings->toArray());

            // foreach($trainings as $key => $value){
            
            //     $exploded_date[]= explode('<br>',$value->date);

            //     // dd($exploded_date);
            // }

            // $exploded_date = explode('<br>',$trainings->date);

            // dd($exploded_date->toArray);

          $response = array(
                            'controller' => $this->controller ,
                            'title'      => $this->index_title,
                            'module'     => $this->module,
                            'trainings'  => $trainings,
                            'coursecategories'  => $coursecategories
                            );


        return view('home.redhat.datatable',$response);
   }


   public function get_records($filters,$q,$limit)
   {
    // $cols = $this->table_columns($this->table);

    // $query = new $this->eloquentModel();

    $query = Training::with('course_categories');

    //                     ->paginate($limit);

     // $query = $query->where(function($query) use($cols, $q){

     //            foreach ($cols as $key => $value) {
     //                $query = $query->orWhere($value,'like','%'.$q.'%');
     //            }
     //    });


    // if(@$filters['status'] == 1){
    //     $query = $query->where('trainings.deleted_at');
    // }

    // if(@$filters['status'] == 2){
    //     $query = $query->withTrashed()->whereNotNull('trainings.deleted_at');
    // }

    $Response = $query -> paginate(50);

    // dd($Response);

    return $Response;

   }

}
