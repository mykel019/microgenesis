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
                          {{$title}}
                        </h3>
                    </div>

                    <div class="title-right"></div>

                    <div class="x_panel">
                        <div class="x_title">
                            <div class="row">
                                <a href="{{url('training/create')}}" class="btn btn-app" style="float: left;"><i class="fa fa-plus"></i>New</a>
                                <div class="input-group search-wrapper">
                                    <span class="input-group-btn">
                                        <button class="btn btn-app search-btn" type="button"><i class="fa fa-search"></i>Search</button>
                                    </span>
                                    <input type="text"  class="form-control search" placeholder="Enter Keyword">
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="x-content">
                            <div class="sub-panel">
                                {!! $controller->getDatatable() !!}
                            
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 col-sm-12 widget-wrapper" style="margin-top: 47px;">
                    <div class="x_panel">
                        <h4>Filter Options</h4>
                            <div class="x_content">
                                <form id="form-filters">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="0">Select</option>
                                            <option value="1">Active</option>
                                            <option value="2">InActive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">             
                                </form>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

  <!-- <script src="{{ asset('js/bootstrap.min.js') }} "></script> -->
@section('js-logic1')
  <script type="text/javascript">
      $(document).ready(function(){

        $("#status").change(function(){
            $('.sub-panel').html('<center><i class="fa fa-spinner fa-pulse fa-3x fa-fw" aria-hidden="true" ></i></center>');
            _filters = $("#form-filters").serialize();
            $.ajax({
                type: "GET",
                url: base_url+module+'/datatable',
                data: {'filters':_filters},
                success: function(res){
                    $(".sub-panel").html(res);
                }
            })
        })

      })
  </script>
@endsection



