@extends('layouts.app')


@section('content')

<div class="container body">
    <div class="main_container">
@include('elements.topnav')
@include('admin.sidemenu')

        <div class="right_col" role="main" style="min-height: 920px;">
            <div class="row">

                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="title_left">
                        <h3>
                          DASHBOARD
                        </h3>
                    </div>

                    <div class="title-right"></div>

                    <div class="x_panel">
                        <div class="x_title">

                            <div class="row">
                                <!-- <a href="" class="btn btn-app" style="float: left;"><i class="fa fa-plus"></i>New</a> -->
                                <div class="input-group search-wrapper">
                                    <span class="input-group-btn">
                                        <!-- <button class="btn btn-app search-btn" type="button"><i class="fa fa-search"></i>Search</button> -->
                                    </span>
                                    <!-- <input type="text"  name="" class="form-control search" placeholder="Enter Keyword"> -->
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="x-content">
                            <div class="sub-panel">
                                <!-- DATATABLE -->
                                <p style="word-wrap: break-word;">
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-3 col-sm-12 widget-wrapper" style="margin-top: 47px;">
             <!--        <div class="x_panel">
                        <h4>Filter Options</h4>
                            <div class="x_content">
                                <form id="form-filters">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Option1</option>
                                            <option>Option2</option>
                                            <option>Option3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        
                                    </div>
                                </form>
                            </div>
                    </div> -->


                </div>


            </div>

        </div>
    </div>
</div>

@endsection

  <!-- <script src="{{ asset('js/bootstrap.min.js') }} "></script> -->
@section('js-logic')
  <script type="text/javascript" src="{{asset('js/general.js')}}" ></script>
@endsection



