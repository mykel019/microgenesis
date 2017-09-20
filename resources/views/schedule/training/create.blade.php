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
                                <a href="{{url('training')}}" class="btn btn-app"><i class="fa fa-long-arrow-left"></i> Return</a>
                                <a class="btn btn-app submit"><i class="glyphicon glyphicon-floppy-disk"></i> Save </a>
                                <a class="btn btn-app clear-form"><i class="glyphicon glyphicon-erase"></i> Clear </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class='x_content'>
                            <form method="POST" action="{{url('training/store')}}" onsubmit="return false" id="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-xs-12 col-md-4">
                                    <div class="inner-panel">
                                        <div class="form-group">
                                            <label>Course Code</label>
                                            <input type="text" name="course_code" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Course Title</label>
                                            <input type="text" name="course_title" id="coursetitle" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Duration</label>
                                            <input type="text" name="duration" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" name="date" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Course Category</label>
                                            <select class="form-control" name="course_category">
                                                <option></option>
                                                @foreach ($coursecategories as $coursecategory)
                                                <option value="{{$coursecategory->id}}" >
                                                    {{$coursecategory->course_name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            <!--     <div class="col-xs-12 col-md-4">
                                    <div class="inner-panel">
                                        <div class="ip-title">title</div>
                                        <div class="ip-body">
                

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
@section('js-logic1')
    <script type="text/javascript">
    //     $(document).on('click','.submit',function(){
    //     _filters = $('#form').serialize();
    //     // var coursetitle = $("#coursetitle").val();
    //     // alert(_filters);
    //     // alert(coursetitle);
    //     // alert(_filters);
    //     clearTimeout(timer);
    //    var timer = setTimeout(
    //                 function(){
    //                     $.ajax({
    //                         type: "POST",
    //                         // dataType: JSON,
    //                         url: base_url+module+'/store',
    //                         // url: "{{url('coursecategory/store')}}",
    //                         // data: {coursecategory:coursecategory},
    //                         data: {filters: _filters},
    //                         success: function(data){
    //                             par = JSON.parse(data);

    //                             if (par.status){
    //                                 $('.alert-notification-success').show();
    //                                 $('.notif-msg').html(par.response);
    //                                 $('.alert-notification-failed').hide();
    //                                 $('.alert').delay(2000).fadeOut(500);
    //                                 $(".error-msg").remove();
    //                                 $('input[type="text"], select').popover('destroy');

    //                                 $('body').animate({
    //                                     scrollTop: $('.alert').offset().top - 130
    //                                 },500);
    //                             }else{
    //                                 $('.alert-notification-success').hide();
    //                                 $('.alert-notification-failed').show();
    //                                 $('.notif-msg').html(par.response);
    //                                 $('.error-msg').remove();
    //                                 $('input[type="text"], select').popover('destroy');
    //                             }
    //                         }
    //                     })
    //                 }
    //         )
    // })

//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
// });
    </script>
@endsection

