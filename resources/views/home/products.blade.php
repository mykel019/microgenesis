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

<div id="about" class="container bg-3 text-center" style="padding: 40px;">
  <div class="row">
    <h2 class="margin">EMERGING PRODUCTS</h2>
    <div class="border-line"></div>

    <div class="row">
      <p class="text-center">Microgenesis continues to grow with a new line of innovative technologies that offer new approaches to an organization’s IT requirements. Introducing Varonis, Tenable, Gigamon, and Forescout who will soon be echoing in the IT industry.</p>
    </div>

    <br>

    <div class="row">
      <div class="col-md-3 col-xs-12">
      <a href="{{url('varonis')}}">
        <img src="{{asset('images/product-logo/varonis.png')}}">
      </a>

       	<!-- <h3>VARONIS</h3> -->
      
      </div>

      <div class="col-md-3 col-xs-12">
      <a href="{{url('tenable')}}">
        <img src="{{asset('images/product-logo/tenable.png')}}">
      </a>

       	<!-- <h3>TENABLE</h3> -->
    
      </div>

      <div class="col-md-3 col-xs-12">
      <a href="{{url('gigamon')}}">
        <img src="{{asset('images/product-logo/gigamon.png')}}">
      </a>

       	<!-- <h3>GIGAMON</h3> -->
    
      </div>

      <div class="col-md-3 col-xs-12">
      <a href="{{url('forescout')}}">
        <img src="{{asset('images/product-logo/forescout.png')}}">
      </a>
        <!-- <h3>FORESCOUT</h3> -->
      
      </div>
    </div>

  </div>
</div>

@endsection