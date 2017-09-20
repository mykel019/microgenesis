<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;
use Input;
use Crypt;
use DB;
use Mail;

class ContactController extends Controller
{
   function __construct(){
        $this->eloquentModel = new Contact();
        $this->controller = $this;
        $this->index_title = "Message";
        $this->module = 'message';
        $this->table = 'contacts';

   }


    public function getIndex()
    {

        $response = array(
                            'controller' => $this->controller ,
                            'title'      => $this->index_title,
                            'module'     => $this->module

                            );


        return view('message.index',$response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        // $data = Input::all();
        $fullname = $request->input('full_name');
        $emails = $request->input('email');
        $subject = $request->input('subject');
        $messages = $request->input('message');

        // dd($email);

        Mail::send('emails.messages',['fullname' => $fullname, 'emails' => $emails, 'messages' => $messages, 'subject' => $subject],function($message) use($emails,$fullname,$subject){

            $message->from($emails, $fullname);

            // $message->to('michaelcapistrano.19@gmail.com')->subject($subject);

            $message->to('info@mgenesis.com')->subject($subject);
        
        });


        // Mail::send('emails.messages',['data' => $data],function($message) use ($data){

        //     $message->to('michaelcapistrano.19@gmail.com','To Michael')->subject('Test Email');

        //     $message->from('michaelcapistrano.19@gmail.com','Michael');

        // });


        // $model = new $this->eloquentModel($data);
    
        // $model->save();

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

            $messages = $this->get_records($filters,$q,$limit);


            // dd($messages);

            // dd($trainings->toArray());

            // foreach($trainings as $key => $value){
            
            //     $exploded_date[]= explode('|',$value->date);

            // }
            //     dd($exploded_date);

            // $exploded_date = explode('<br>',$trainings->date);

            // dd($exploded_date->toArray);

    
          $response = array(
                            'controller' => $this->controller ,
                            'title'      => $this->index_title,
                            'module'     => $this->module,
                            'messages'  => $messages
                            
                            );

        return view('message.datatable',$response);
   }



   public function get_records($filters,$q,$limit)
   {
    $cols = $this->table_columns($this->table);

    // $query = new $this->eloquentModel();

    // $query = Contact::paginate($limit);

    $query = new $this->eloquentModel();


    //                     ->paginate($limit);

     $query = $query->where(function($query) use($cols, $q){

                foreach ($cols as $key => $value) {
                    $query = $query->orWhere($value,'like','%'.$q.'%');
                }
        });


    $Response = $query->paginate($limit);

    // dd($Response);

    return $Response;

   }




    public function show($id)
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
                    'controller'    => $this->controller,
                    'title'         => $this->index_title,
                    'result'    => $result,
                    'module'    => $this->module
            );

        return view('message.edit',$response);

    }

 
    public function update(Request $request, $id)
    {
        //
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


        private function hardDelete($data){
        
        $res = DB::table($this->table)
                        ->whereIn('id',$data)
                        ->delete();

        return $res;
    }
}
