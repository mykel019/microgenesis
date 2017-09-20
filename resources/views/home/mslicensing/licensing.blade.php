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

<div id="about" class="container" style="padding: 20px 40px;" >
  <div class="row">
    <h2 class="margin text-center">SOFTWARE LICENSING</h2>
    <div class="border-line"></div>


    <div class="row">
      <p class="text-center" style="padding: 0 40px 0 40px!important;font-size: 15px;">At Microgenesis, we believe in the importance of safety and security of all software products that our clients utilize. Top software corporations such as Microsoft, Autodesk, and Adobe are very reputable and we provide best in class licensing services to ensure data protection and confidentiality.</p>
    </div>

    <br>


    <div class="row">
      <div class="col-md-4 col-xs-12">
      <a href="{{url('microsoft')}}">
        <img src="{{asset('images/product-logo/ms.png')}}" class="img-responsive responsive-img">
      </a>
  
       	<!-- <h3 class="text-center">MICROSOFT</h3> -->
       	
      </div>

      <br>

      <div class="col-md-4 col-xs-12">
      <a href="{{url('autodesk')}}">
        <img src="{{asset('images/product-logo/autodesk.png')}}" class="img-responsive responsive-img">
      </a>
       	<!-- <h3 class="text-center">AUTODESK</h3> -->
     
      </div>

      <br>

        <div class="col-md-4 col-xs-12">
        <a href="{{url('adobe')}}">
          <img src="{{asset('images/product-logo/adobe.png')}}" class="img-responsive responsive-img">
        </a>
       	<!-- <h3 class="text-center">ADOBE</h3> -->
     
      </div>
    </div>

  </div>
</div>

@endsection