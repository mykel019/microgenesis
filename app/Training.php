<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Training extends Model
{
    use SoftDeletes;

    protected $table = 'trainings';
    protected $fillable = [
    	'course_code',
    	'course_title',
    	'duration',
    	'date',
    	'course_category',
    ];

    protected $dates = ['deleted_at'];

    public function course_categories(){
    	return $this->belongsTo('App\CourseCategory','course_category');
    }
}
