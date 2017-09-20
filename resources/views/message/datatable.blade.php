
       <table class="table">
        <thead>
            <!-- <th>#</th> -->
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Phone#</th>
            <th>Address</th>
            <th>City</th>
            <th>Message</th>

            <th></th>
        </thead>
        <tbody>

  

        @foreach ($messages as $message)
      

            <tr id="" class="active-row">
              
                <td>{{$message->first_name}}</td>
                <td>{{$message->last_name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->phone}}</td>
                <td>{{$message->address}}</td>
                <td>{{$message->city}}</td>
                <td>{{$message->comment}}</td>
         
                    <td class="">
                        <div class="btn-group">
                            <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                                <ul class="dropdown-menu">
                               
                               <!--      <li><a class="activates" data-id="{{Crypt::encrypt($message->id)}}" value="{{Crypt::encrypt($message->id)}}"  href="">Activate</a></li> -->
                             
                                    <li><a href="{{ url($module.'/edit/'.Crypt::encrypt($message->id)) }}">View</a></li>
                                    <li><a href="#" class="single-delete" data-id="{{ Crypt::encrypt($message->id) }}">Delete</a></li>
                                
                                </ul>
                        </div>
                    </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>

    <!-- <span><button class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i> &nbsp;Remove</button></span> -->
    <span>{{ $messages->render() }}</span>



@section('js-logic2')
<script>
  

    //  $(document).on('click','.activates',function(){
    //     alert("yehey");
    //     id = $(this).data('id');

    //     tr = $(this).closest('tr');


    // clearTimeout(timer);
    // timer = setTimeout(
    //             function(){
    //                 $.ajax({
    //                    type: "GET",
    //                    url: "{{url('coursecategory/activate')}}",
    //                    data: {id:id},
    //                    success: function(data){
                
    //                         par  =  JSON.parse(data);
    //                             tr.remove();
    //                             // $(".alert_activated").slideDown();
    //                             // $('.alert_activated').delay(1000).slideUp()
    //                           $('.alert-notification-success').show();
    //                           $('.notif-msg').html(par.response);
    //                           $('.alert-notification-failed').hide();
    //                           $('.alert').delay(2000).fadeOut(500)
    //                           // alert(par.response);   
    //                           $(".error-msg").remove();
    //                           $('input[type="text"], select').popover('destroy');

    //                           $('body').animate({
    //                                   scrollTop: $('.alert').offset().top - 130
    //                               }, 500);

            
    //                    }
    //                 });
    //             },500);

    //   })

</script>
@endsection
