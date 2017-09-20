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

<div class="divider hidden-xs"></div>

<div class="container" style="padding: 0 20px;">
  <div class="row">
    <h2 class="margin text-center">STORAGE</h2>
    <div class="border-line"></div>


    <div class="row">
        <div class="col-md-3 col-xs-12">
      <a href="{{url('huwaei')}}">
          <img src="{{asset('images/product-logo/huawei.png')}}"  class="img-responsive responsive-img"> 
      </a>
          <!-- <h3 class="center">HUWAEI</h3> -->
          <p>Huawei Technologies Co Ltd is the world's largest telecom equipment maker and China’s largest telephone-network equipment maker..</p>
        </div>

        <div class="col-md-3 col-xs-12">
      <a href="{{url('ibm')}}">
          <img src="{{asset('images/product-logo/ibm.png')}}" class="img-responsive responsive-img"> 
      </a>
          <!-- <h3 class="center">IBM</h3> -->
          <p>IBM is highly regarded as a valuable brand. The company manufactures and markets computer hardware, software, and offers to host and consulting services from mainframe computers to nanotechnology.
          </p>
        </div>

        <div class="col-md-3 col-xs-12">
      <a href="{{url('emc')}}">
        <img src="{{asset('images/product-logo/emc2.png')}}"  class="img-responsive responsive-img"> 
      </a>
        <!-- <h3 class="center">EMC</h3> -->
        <p> VMware is a subsidiary of Dell Technologies. The company provides cloud computing and platform virtualization software and services. It was the first commercially successful company to virtualize the x86 architecture.</p>
      </div>

      <div class="col-md-3 col-xs-12">
      <a href="{{url('synology')}}">
        <img src="{{asset('images/product-logo/synology.png')}}"  class="img-responsive responsive-img"> 
      </a>
        <!-- <h3 class="center">SYNOLOGY</h3> -->
        <p>Synology is a Taiwanese corporation that specialize in network attached storage (NAS) appliances. Their products are distributed worlwide and localized in several languages</p>
      </div>



    </div>

    <br>

  </div>
</div>

@endsection