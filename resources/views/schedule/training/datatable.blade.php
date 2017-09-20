
       <table class="table">
        <thead>
            <!-- <th>#</th> -->
            <th>Course Code</th>
            <th>Course Title</th>
            <th>Duration</th>
            <th>Date</th>
            <th>Course Category</th>
        </thead>

        <tbody>

        @foreach ($trainings as $training)
            <?php if($training->deleted_at): ?>
                <?php $status = "deleted-row" ?>
            <?php else: ?>
                <?php $status = "active-row" ?>
            <?php endif ?>

            <tr id="" class="{{$status}}">
                <!-- <td>{{$training->id}}</td> -->
                <td>{{$training->course_code}}</td>
                <td>{{$training->course_title}}</td>
                <td>{{$training->duration}}</td>
                <td>{{$training->date}}</td>

                <td>{{$training['course_categories']['course_name']}}</td>

                    <td class="">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                                <ul class="dropdown-menu">
                                <?php if($training->deleted_at): ?>
                                    <li><a class="activate" data-id="{{Crypt::encrypt($training->id)}}" value="{{Crypt::encrypt($training->id)}}" href="">Activate</a></li>
                                <?php else: ?>
                                    <li><a href="{{ url($module.'/edit/'.Crypt::encrypt($training->id))}}">Edit</a></li>
                                    <li><a href="#" class="single-delete" data-id="{{ Crypt::encrypt($training->id) }}">Delete</a></li>
                                <?php endif ?>
                                </ul>
                        </div>
                    </td>
            </tr>
        @endforeach

        </tbody>
        
    </table>
    <span>{{ $trainings->render() }}</span>

    <!-- <span><button class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i> &nbsp;Remove</button></span> -->
 
@section('js-logic2')
<script>

    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
</script>
@endsection
