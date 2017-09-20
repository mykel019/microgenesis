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

<div id="about" class="container bg-3 text-center" style="padding: 20px 40px;">
  <div class="row">
    <h2 class="margin">PC VOLUME BUSINESS</h2>
    <div class="border-line"></div>

    <div class="row">
        <p class="text-center" style="padding: 0 80px 0 80px;"> Microgenesis offers top of the line computers and laptops that are very reputable in the market. We partner with HP, Lenovo, Acer, ASUS, and DELL computers to make sure we offer the best quality hardware and software we can provide for our clients’ needs.</p> 
    </div>

    <br>  


    <div class="row">
      <div class="col-md-4 col-xs-12">
      <a href="{{url('hp')}}">
        <img src="{{asset('images/product-logo/hp.png')}}" class="img-responsive responsive-img">
      </a>
       	<!-- <h3>HP</h3> -->
      
      </div>

      <div class="col-md-4 col-xs-12">
      <a href="{{url('lenovo')}}">
        <img src="{{asset('images/product-logo/lenovo.png')}}" class="img-responsive responsive-img">
        
      </a>
       	<!-- <h3>LENOVO</h3> -->
    
      </div>

        <div class="col-md-4 col-xs-12">
        <a href="{{url('dell')}}">
        <img src="{{asset('images/product-logo/dell.png')}}" class="img-responsive responsive-img">
          
        </a>
       	<!-- <h3>DELL</h3> -->
  
      </div>
    </div><br><br>


    <div class="row">
      <div class="col-md-3 col-md-offset-2">
      <a href="{{url('acer')}}">
        <img src="{{asset('images/product-logo/acer.png')}}" class="img-responsive responsive-img">
        
      </a>
      </a>
        <!-- <h3>ACER</h3> -->
     
      </div>

      <div class="col-md-3 col-md-offset-2">
      <a href="{{url('asus')}}">
        <img src="{{asset('images/product-logo/asus.png')}}" class="img-responsive responsive-img">
        
        <!-- <h3>ASUS</h3> -->
       
      </div>
    </div>

  </div>
</div>

@endsection