@extends('layouts.app')

@section('content')
<div class="container body">
    <div class="main_container">
       @include('elements.topnav')
        @include('admin.sidemenu')
        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 920px;">

            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>{{ $title }}</h3>
                        </div>

                    </div>
                    <div class='x_panel'>
                        <div class='x_title '>
                            <div class="row">
                                <a href="{{url('data')}}" class="btn btn-app"><i class="fa fa-long-arrow-left"></i> Return</a>
                                <button type="button" class="btn btn-app submit"><i class="glyphicon glyphicon-floppy-disk"></i> Save </a>
                                <button class="btn btn-app clear-form"><i class="glyphicon glyphicon-erase"></i> Clear </button>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class='x_content'>
                            <form method="POST" action="{{url('data/store')}}" onsubmit="return false" id="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-xs-12 col-md-4">
                                    <div class="inner-panel">
                                        <div class="form-group">
                                            <label>Data Name</label>
                                            
                                            <input type="text" name="data_name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            
                                            <input type="text" name="description" class="form-control">
                                        </div>

                                      <!--   <div class="form-group">
                                            <label>Course Title</label>
                                            <input type="text" name="mname" class="form-control">
                                        </div> -->
                                    </div>
                                </div>
                             <!--    <div style="position: absolute;top: -93px;left: 180px;">
                                    <button type="submit" class="btn btn-app"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
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


@section('js-logic1')
<script type="text/javascript">
    
</script>
@endsection
