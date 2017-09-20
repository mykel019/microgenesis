@extends('app')

@section('css')
  <style type="text/css">
      .dc-resp{
        width: 340px;
        height: 240px;
        border-radius: 5%; 
        box-shadow: 0 5px 10px rgba(0,0,0,0.86); 
        padding: 8px; 
        margin: 0 auto;
        
      }
  </style>
@endsection

@section('content')

<div class="divider hidden-xs"></div>

<div id="about" class="container" style="padding: 0 30px;">
  <div class="row">
    <h2 class="margin text-center">DATA CENTER & CLOUD</h2>
    <div class="border-line"></div>

    <div class="row">
        <p class="text-center" style="padding: 0 100px 0 100px;"> In any computer-based industry, data servers, back-up storage systems, and virtualization solutions are very important. Microgenesis is an expert in providing these solutions to help our clients store and protect highly sensitive and valuable data, as well as help reduce cost by consolidating more workloads in fewer servers.</p> 
    </div>


    <div class="row">
      <a href="{{url('dc-servers')}}">
        <div class="col-md-4 col-xs-12">
          <h3 class="text-center">SERVERS</h3>
          <img src="{{asset('images/datacenter_0.png')}}" class="img-responsive dc-resp"><br><br>
       
        </div>
      </a>

      <a href="{{url('dc-storage')}}">
        <div class="col-md-4 col-xs-12">
          <h3 class="text-center">STORAGE</h3>
    
            <img src="{{asset('images/storage.jpg')}}"  class="img-responsive dc-resp"><br><br>
       
        </div>
      </a>

      <a href="{{url('dc-virtualization')}}">
        <div class="col-md-4 col-xs-12">
        <h3 class="text-center">VIRTUALIZATION</h3>
          <img src="{{asset('images/out_of_the_box.jpg')}}" class="img-responsive dc-resp"><br><br>
      
      </div>
      </a>

    </div>

  </div>
</div>

@endsection