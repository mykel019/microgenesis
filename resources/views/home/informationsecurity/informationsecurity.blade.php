@extends('app')

@section('css')
  <style type="text/css">
  a > div > img{
    transition: .5s;
  }
    a > div > img:hover{
      transform: scale(1.1);
    }
  </style>
@endsection

@section('content')

<div class="divider"></div>

<div id="about" class="container bg-3 text-center" >
  <div class="row">
    <h2 class="margin">IT SECURITY</h2>
    <div class="border-line"></div>

    <div class="row text-center" style="padding: 0 50px 0 50px;">
      <p>Microgenesis has a reliable pool of giant brands that help provide security solutions to protect your organization’s data. Top industry names such as Sophos, Paloalto, Solarwinds, and Kaseya all excel in targeting and resolving network reliability as well as detect, diagnose, and resolve network performance issues.</p>
    </div>

    <br>  

    <div class="row">

     <a href="{{url('sophos')}}"><div class="col-md-3 col-xs-12">
        <img src="{{asset('images/product-logo/sophos.png')}}">
       	<!-- <h3>SOPHOS</h3> -->
      </div>
      </a>

      <a href="{{url('paloalto')}}">
      <div class="col-md-3 col-xs-12">
        <img src="{{asset('images/product-logo/paloalto.png')}}">
       	<!-- <h3>PALO-ALTO</h3> -->
     
      </div>
      </a>

      <a href="{{url('solarwinds')}}">
        <div class="col-md-3 col-xs-12">
        <img src="{{asset('images/product-logo/solarwinds.png')}}">
       	<!-- <h3>SOLARWINDS</h3> -->
    
      </div>
      </a>

      <a href="{{url('kaseya')}}">
        <div class="col-md-3 col-xs-12">
        <img src="{{asset('images/product-logo/kaseya.png')}}">
        <!-- <h3>KASEYA</h3> -->
   
      </div>
      </a>

    </div>

  </div>
</div>

@endsection