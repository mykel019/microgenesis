@extends('app')

@section('css')
  <style type="text/css">
  a > img{
    transition: .5s;
  }
    a > img:hover{
      transform: scale(1.1);
    }
  </style>
@endsection
@section('content')

<div class="divider"></div>

<div id="about" class="container bg-3 text-center" >
  <div class="row">
    <h2 class="margin">PROFESSIONAL SERVICES</h2>
    <div class="border-line"></div>

    <p style="padding: 0 100px;">Through Microgenesis’ own brand of IT service, SmartServe is dedicated to help improve the organizations’ performance by delivering security, productivity and mobility.</p>

    <div class="row">
      <div class="col-md-6 col-xs-12">
      <a href="{{url('smartserve')}}">
        <img src="{{asset('images/smartserve.png')}}" class="img-responsive responsive-img">
      </a>
       <!-- 	<h3>SMART SERVE</h3>
       	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec sapien magna. Vestibulum iaculis mauris et ligula aliquet, ac convallis odio vestibulum. Proin consequat finibus sodales. Nullam aliquam ac ante eu semper.</p> -->
      </div>

      <div class="col-md-6 col-xs-12">
        <a href="{{url('ms-proffservices')}}">
          <img src="{{asset('images/product-logo/ms.png')}}" class="img-responsive responsive-img" style="margin-top: 25px;">
        </a>
       <!-- 	<h3>MICROSOFT SERVICES</h3>
       	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec sapien magna. Vestibulum iaculis mauris et ligula aliquet, ac convallis odio vestibulum. Proin consequat finibus sodales. Nullam aliquam ac ante eu semper.</p> -->
      </div>

    </div>

  </div>
</div>

@endsection