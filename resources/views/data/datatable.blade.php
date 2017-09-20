
       <table class="table">
        <thead>
            <!-- <th>#</th> -->
            <th>#</th>
            <th>DATA NAME</th>
            <th>DESCRIPTION</th>
        </thead>
        <tbody>
       
        @foreach ($results as $result)


            <tr id="" class="active-row">
                <td>{{$result->id}}</td>
                <td>{{$result->data_name}}</td>
                <td>{{$result->description}}</td>
               <!--  <td><button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
                </td> -->
                    <td class="">
                        <div class="btn-group">
                            <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url($module.'/edit/'.Crypt::encrypt($result->id)) }}">Edit</a></li>
                                    <li><a href="#" class="single-delete" data-id="{{ Crypt::encrypt($result->id) }}">Delete</a></li>
                              
                                </ul>
                        </div>
                    </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>

    <!-- <span><button class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i> &nbsp;Remove</button></span> -->
    <span>{{ $results->render() }}</span>



@section('js-logic2')
<script>
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });

     $(document).on('click','.activates',function(){
        alert("yehey");
        id = $(this).data('id');

        tr = $(this).closest('tr');

        // $.ajax(
        //   url: 'coursecategory/activate',
        //   {id:id},
        //   function(data){
        //     // alert(data);
        //     par  =  JSON.parse(data);
        //     tr.remove();
        //     // $(".alert_activated").slideDown();
        //     // $('.alert_activated').delay(1000).slideUp()
        //   $('.alert-notification-success').show();
        //   $('.notif-msg').html(par.response);
        //   $('.alert-notification-failed').hide();
        //   $('.alert').delay(2000).fadeOut(500)
        //   // alert(par.response);   
        //   $(".error-msg").remove();
        //   $('input[type="text"], select').popover('destroy');

        //   $('body').animate({
        //           scrollTop: $('.alert').offset().top - 130
        //       }, 500);

        // })

    clearTimeout(timer);
    timer = setTimeout(
                function(){
                    $.ajax({
                       type: "GET",
                       url: "{{url('coursecategory/activate')}}",
                       data: {id:id},
                       success: function(data){
                
                            par  =  JSON.parse(data);
                                tr.remove();
                                // $(".alert_activated").slideDown();
                                // $('.alert_activated').delay(1000).slideUp()
                              $('.alert-notification-success').show();
                              $('.notif-msg').html(par.response);
                              $('.alert-notification-failed').hide();
                              $('.alert').delay(2000).fadeOut(500)
                              // alert(par.response);   
                              $(".error-msg").remove();
                              $('input[type="text"], select').popover('destroy');

                              $('body').animate({
                                      scrollTop: $('.alert').offset().top - 130
                                  }, 500);

            
                       }
                    });
                },500);

      })

</script>
@endsection
