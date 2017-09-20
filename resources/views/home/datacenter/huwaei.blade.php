@extends('app')

@section('css')

@endsection

@section('content')
<div class="divider"></div>

<div class="container" >
  <div class="row">
    <h2 class="margin"></h2>
    <!-- <div class="border-line"></div> -->


    <div class="row text-center">
        <div class="col-md-12 col-xs-12">
          <img src="{{asset('images/product-logo/huawei.png')}}" class="img-responsive" style="margin: 0 auto;"> 
        
          <h3>Rock Solid Data Storage System from Huawei</h3>
          <!-- <div class="border-line"></div> -->
          <p>Providing converge functionality that maximizes performance and capacity utilization, Huwaei storage products meet a wide range of needs: entry-level, mid-range, and high-end enterprise applications and cloud storage</p>
        </div>

    </div>

    <div>
      
    </div>
  </div>

  <div class="border-line"></div>

  <div class="row">
    <div class="col-md-4">
      <img src="{{asset('images/rock-solid.png')}}" class="img-responsive responsive-img">
      <h3 class="text-center">Enterprise Unified Storage</h3>
      <ul>
        <li><a href="" class="blue">OceanStor 18000 V3 Series Storage Systems</a></li>
        <li><a href="" class="blue">OceanStor 18000 Series Enterprise Storage Systems</a></li>
        <li><a href="" class="blue">OceanStor 6800 V3 High-end Storage System</a></li>
      </ul>
    </div>

    <div class="col-md-4">
      <img src="{{asset('images/massive-storage.png')}}" class="img-responsive responsive-img">
      <h3 class="text-center">Massive Storage</h3>
      <ul>
        <li><a href="http://e.huawei.com/en/products/cloud-computing-dc/storage/massive-storage/9000" class="blue">OceanStor 9000 Big Data Storage System</a></li>
        <li><a href="" class="blue">Oceanstor UDS Massive Storage System</a></li>
      </ul>
    </div>

    <div class="col-md-4">
      <img src="{{asset('images/storage-software.png')}}" class="img-responsive responsive-img">
      <h3 class="text-center">Storage Software</h3>
      <ul>
        <li><a href="" class="blue">OceanStor Replication Director Disaster Recovery Management Software</a></li>
      </ul>
    </div>
  </div>
  <br><br>
</div>

@endsection