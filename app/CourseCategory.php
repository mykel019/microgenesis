<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CourseCategory extends Model
{
	use SoftDeletes;
    
    protected $table = 'course_categories';
    protected $fillable = [
    	'course_category'
    ];

    protected $dates = ['deleted_at'];

    public function trainings(){
    	return $this->HasMany('App\Training');
    }
}
