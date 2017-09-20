<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use softDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'applicants';
    protected $filable = [
    	'firstname',
    	'middlename',
    	'lastname',
    	'contact_num',
    	'email'
    ];
}
