@extends('layouts.app')

@section('content')
<div class="container body">
    <div class="main_container">
        @include('elements/topnav')
        @include('admin/sidemenu')
        <!-- page content -->
        <div class="right_col" role="main">

            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="page-title">
                        <h3>{{ $title }}</h3>
                    </div>
                    <div class='x_panel'>
                         <div class='x_title'>
                            <div class="row">
                                <a href="{{ url($module) }}" class="btn btn-app"><i class="fa fa-long-arrow-left"></i> Return</a>
                                <a class="btn btn-app submit"><i class="glyphicon glyphicon-floppy-disk"></i> Save </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class='x_content'>
                            <form method="POST" action="{{ url('/').'/'.$module.'/update'}}" onsubmit="return false" id="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ Crypt::encrypt($trainings->id) }}">
                                <div class="col-xs-12 col-md-4">
                                    <div class="inner-panel">
                                        <div class="form-group">
                                            <label>Course Code</label>
                                            <input type="text" name="course_code" value="{{$trainings->course_code}}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Course Title</label>
                                            <input type="text" name="course_title" value="{{$trainings->course_title}}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Duration</label>
                                            <input type="text" name="duration" value="{{$trainings->duration}}" class="form-control">
                                        </div>
                                         
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" name="date" value="{{$trainings->date}}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Course Category</label>
                                            <select name="course_category" class="form-control"> 

                                                <?php foreach ($coursecategories as $key => $value): ?>
                                                    <?php $selected = ''; if($trainings->course_category == $value->id) $selected = "selected"; ?>
                                                    <option value="{{$value->id}}" {{$selected}}>{{$value->course_name}}</option>
                                                <?php endforeach ?>

                                               <!-- @foreach($coursecategories as $coursecategory)
                                                    @if($coursecategory->id == $trainings->course_category){{$selected = "selected"}}
                                                    <option value="{{$coursecategory->id}}">{{$coursecategory->course_name}}</option>
                                                    @endif
                                               @endforeach

                                               @foreach($coursecategories as $coursecategory)
                                               <option value="{{$coursecategory->id}}">{{$coursecategory->course_name}}</option>
                                               @endforeach
 -->
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>

                             <!--    <div class="col-xs-12 col-md-4">
                                    <div class="inner-panel">
                                        <div class="ip-title">Custom Fields</div>
                                        <div class="ip-body">
                                      
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" name="" value="" class="form-control">
                                                </div>
                                          
                                        </div>
                                    </div>
                                </div> -->

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <br />
        </div>
        <!-- /page content -->
    </div>
</div>
@endsection



