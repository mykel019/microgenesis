<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use App\Data;


class SearchController extends Controller
{
	function __construct()
	{
        $this->module = 'data';
        $this->table = 'data';
        $this->eloquentModel = new Data();
        $this->controller = $this;
	}

    public function getDatatable()
    {
    	$q = Input::get('q');

        if(empty($limit)){ $limit = 10; } //default

        $results = $this->get_records($q, $limit);

        $response = array(
        			'controller' => $this->controller , 
        			'results'	=> $results
        	);

        return view('home.search_datatable',$response);

    }


    public function get_records($q, $limit)
    {
   		$cols = array('data_name');

        $query = new $this->eloquentModel();

        $query = $query->where(function($query) use($cols, $q){
        	foreach ($cols as $key => $value) {
        		$query = $query->orWhere($value,'like','%'.$q.'%');
        	}
        });


        $Response = $query -> paginate($limit);

        // dd($Response->toArray());

        return $Response; 

    }
}
