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
    <h2 class="margin">DOCUMENT MANAGEMENT SOLUTIONS</h2>
    <div class="border-line"></div>

    <div class="row">
        <p class="text-center text-indent" style="padding: 0 170px;"> When your company isn’t totally paperless but you need to store everything digitally, Microgenesis has the best solution for you. We partner with Kofax and Fuji to provide simple, affordable, yet complete document management solutions that aim to digitize, enhance, archive, and manage your organization’s documents.</p> 
    </div>

    <br>

    <div class="row">
      <div class="col-md-6 col-xs-12">
      <br><br><br>
      <a href="{{url('kofax')}}">
      <img src="{{asset('images/kofax/kofax_logo.png')}}" class="img-responsive responsive-img" height="200px;" width="350px;">
      </a>
       	<!-- <h3>KOFAX</h3> -->
     
      </div>

<!--       <div class="col-md-4 col-xs-12">
       	<h3>KOFAX 8 in 1 Inquiry</h3>
 
      </div> -->

      <div class="col-md-6 col-xs-12">
        <a href="http://www.fujixerox.com/eng/product/" target="_blank">
          <img src="{{asset('images/Fuji-Xerox.png')}}" height="200px;" width="350px;">
        </a>
       	<!-- <h3>FUJIXEROX</h3> -->
    
      </div>

    </div>

  </div>
</div>

@endsection