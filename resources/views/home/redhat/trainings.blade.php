@extends('app')
@section('content')
<!-- <div class="divider"></div> -->

<div id="trainings" class="container" style="margin-top: 30px;">
    <!-- <h2 class="margin">TRAININGS</h2> -->
    <img class="img-responsive responsive-img" src="{{asset('images/redhat.png')}}";">
    <!-- <div class="row"><div class="container"><hr style="box-shadow: grey; margin-bottom: 55px;"></div></div> -->
    <div class="border-line"></div>

          {!! $controller->getDatatable() !!}

  </div>


@endsection