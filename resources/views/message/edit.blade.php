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
                                <!-- <a class="btn btn-app submit"><i class="glyphicon glyphicon-floppy-disk"></i> Save </a> -->
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class='x_content'>
                            <form method="POST" action="{{ url('/').'/'.$module.'/update'}}" onsubmit="return false" id="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id" value="{{ Crypt::encrypt($result->id) }}">
                                <div class="col-xs-12 col-md-4">
                                    <div class="inner-panel">
                                        <div class="form-group">
                                            <label>Firstname</label>
                                            <input type="text" name="coursecategory" value="{{$result->first_name}}" class="form-control"><br>
                                            <label>Lastname</label>

                                            <input type="text" name="coursecategory" value="{{$result->last_name}}" class="form-control"><br>
                                            <label>Email</label>

                                            <input type="text" name="coursecategory" value="{{$result->email}}" class="form-control"><br>
                                            <label>Phone#</label>

                                            <input type="text" name="coursecategory" value="{{$result->phone}}" class="form-control"><br>
                                            <label>Address</label>

                                            <input type="text" name="coursecategory" value="{{$result->address}}" class="form-control"><br>
                                            <label>City</label>

                                            <input type="text" name="coursecategory" value="{{$result->city}}" class="form-control">

                                            <br>
                                            <label>Message</label><br>

                                            <textarea cols="90" rows="10" style="width: 340px;">{{$result->comment}}</textarea> 
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



