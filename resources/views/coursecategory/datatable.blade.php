
       <table class="table">
        <thead>
            <!-- <th>#</th> -->
            <th>COURSE CATEGORY</th>
            <th></th>
        </thead>
        <tbody>
       
        @foreach ($coursecategories as $coursecategory)

            <?php if($coursecategory->deleted_at): ?>
                <?php $status = "deleted-row" ?>
            <?php else: ?>
                <?php $status = "active-row" ?>
            <?php endif ?>

            <tr id="" class="{{$status}}">
                <!-- <td>{{$coursecategory->id}}</td> -->
                <td>{{$coursecategory->course_name}}</td>
               <!--  <td><button class="btn btn-success">Edit</button>
                <button class="btn btn-danger">Delete</button>
                </td> -->
                    <td class="">
                        <div class="btn-group">
                            <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                                <ul class="dropdown-menu">
                                <?php if($coursecategory->deleted_at): ?>
                                    <li><a class="activates" data-id="{{Crypt::encrypt($coursecategory->id)}}" value="{{Crypt::encrypt($coursecategory->id)}}"  href="">Activate</a></li>
                                <?php else: ?>
                                    <li><a href="{{ url($module.'/edit/'.Crypt::encrypt($coursecategory->id)) }}">Edit</a></li>
                                    <li><a href="#" class="single-delete" data-id="{{ Crypt::encrypt($coursecategory->id) }}">Delete</a></li>
                                <?php endif ?>
                                </ul>
                        </div>
                    </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>

    <!-- <span><button class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i> &nbsp;Remove</button></span> -->
    <span>{{ $coursecategories->render() }}</span>



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
