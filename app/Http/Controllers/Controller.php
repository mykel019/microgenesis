<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
use TCPDF;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

     public function table_columns($table){
        
        $res = array();
        $data = DB::select('SELECT column_name FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'.env('DB_DATABASE', 'forge').'" AND TABLE_NAME="'.$table.'"');
        foreach ($data as $key => $value) {
        	$notInArray = array('id','created_at','updated_at');
        	// echo 
            if(!in_array($value->column_name,$notInArray)){            	
                array_push($res,$value->column_name);
            }
        }
        return $res;

    }


    // public function csrf_token(){
    //     return csrf_token();
    // }

     /*---------------------------
        generated ID
    ----------------------------*/
    public function check_code_exist($code = null){

      $res =   DB::table("code_generator")->where('code',$code);
    
        $data = array( 'status'=>$res->count(),
                       'value' =>$res->first() );
        return $data;
    }


    public function subscription_modules(){

        return DB::table('subscriptions')
                            ->leftJoin('modules', 'modules.id','=','subscriptions.module_id')
                            ->select('subscriptions.*','modules.module_name')
                            ->where('subscriber_id', Auth::User()->subscriber_id)
                            ->get();

        
    }

    public function allowedModules(){

        $subscription_modules = $this->subscription_modules();
        $hold = [];
        foreach($subscription_modules as $key => $value){
          array_push($hold, strtolower($value->module_name)) ;
        }
        if(!in_array($this->module, $hold)){
             abort(404);
        }
    }

    public function allowedAccessModules(){
        
        $_modules = $this->access_rights();
        if(Auth::User()->position_id != 0){
            
            $hold_access = [];
            foreach($_modules as $key => $value){
              array_push($hold_access, strtolower($value->module)) ;
               if($this->module == $value->module){
                    if($value->to_view == '0'){
                        abort(404);
                    }
                } 
            }

             if(!in_array($this->module, $hold_access)){
                 abort(404);
            }
        }
    }

    public function access_rights(){

        return DB::table('access_rights')
                    ->leftJoin('access_modules', 'access_modules.id','=','access_rights.access_module_id')
                    ->leftJoin('access_types', 'access_types.id','=','access_rights.access_type_id')
                    ->leftJoin('users', 'users.access_type_id','=','access_types.id')
                    ->select('access_rights.access_type_id','access_modules.module','access_types.name', 'users.id','access_rights.to_view','access_rights.to_add','access_rights.to_edit','access_rights.to_delete','access_rights.to_import','access_rights.to_export')
                    ->where('users.id', Auth::User()->id)
                    ->where('access_rights.subscriber_id', Auth::User()->subscriber_id)
                    ->where('users.position_id', '!=', 0)
                    ->where('access_rights.access_type_id', Auth::User()->access_type_id)
                    ->get();
    }

    public function user_details(){
        return DB::table('users')
                ->leftJoin('positions','positions.id','=','users.position_id')
                ->select('users.*', 'positions.name')
                ->where('users.id', Auth::User()->id)
                ->first();
    }
    public function allowedAccessrights(){


        $access_rights = $this->access_rights();

        $modules = [];
        foreach($access_rights as $key => $value){
          array_push($modules, $value->module) ;
        }

        if(in_array($this->module, $modules)){

            return $access_rights;

        } else {

            return $access_rights;
        }
    }



    public function generate_code($key = null){

        $code  =  $this->check_code_exist($key);
        
        if($code['status'] > 0){  
            $code = $code['value']->value + 1;
            $data = array('value' => $code);

            DB::table('code_generator')->where('code',$key)->update($data);
            $res = $code;
        }else{
            $data = array(  'code' =>$key,
                            'value'=> 1);

            DB::table('code_generator')->insert($data);

            $res = 1;
        }

        return $res;
    }

    /*----------------------------------
                 GENERATE PDF   
    -----------------------------------*/
    public function PDFViewer($opt = array())
    {
        // $pdf = new TCPDF();
        $PDF_PAGE_ORIENTATION   =  $opt['orientation']; # P -portrait or L - landscape
        $PDF_UNIT               =  $opt['unit']; # mm
        $PDF_PAPER_SIZE         =  $opt['paper_size']; #array(100,200); #ARRAY OR PAPERSIZES: A4,A6 etc..
        $PDF_CONTENT            =  $opt['content'];
        $PDF_FILENAME           =  $opt['filename'];
        $PDF_OUTPUT             =  $opt['output'];

        $pdf = new TCPDF($PDF_PAGE_ORIENTATION, $PDF_UNIT, $PDF_PAPER_SIZE, true, 'UTF-8', false);

        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        
        foreach ($PDF_CONTENT as $content) {
            $pdf->AddPage();
            $pdf->writeHTML($content, true, false, true, false, '');
        }

        $filename =  storage_path() . '/pdfs/'.$PDF_FILENAME.'.pdf';
        $pdf->output($filename, $PDF_OUTPUT); # I = display pdf | FD = force DL | F = generate a file


        if(strtoupper($PDF_OUTPUT) == 'FD'){
            
        return Response::output($filename);
        }
    
    }
}
