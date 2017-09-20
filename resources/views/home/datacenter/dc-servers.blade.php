@extends('app')

@section('css')
  <style type="text/css">
  a > img{
    transition: .5s;
  }
    a > img:hover{
      transform: scale(1.1);
    }


/*    p > a.btn-info {
      color: #fff;
      font-weight: 400;
      font-size: 13px;
      line-height: 15px;
      margin-right: 10px;
      text-align: center;
      padding: 17px 30px;
      white-space: nowrap;
      letter-spacing: 1px;
      display: inline-block;
      border: none;
      text-transform: uppercase;
      -webkit-animation-delay: 2s;
      animation-delay: 2s;
      -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
      transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
    }
*/



/*    p > a.btn-info:hover,
    p > a.btn-info:active {
      color: #000000;
    
      border: 1px solid black;
      background: transparent!important;
      -webkit-transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
      transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
}*/


  </style>
@endsection

@section('content')

<div class="divider hidden-xs"></div>

<div id="about" class="container" style="padding: 0 40px;">
  <div class="row">
    <h2 class="margin text-center">SERVERS</h2>
    <div class="border-line"></div>

    <div class="row">
      <!-- <a href="{{url('huwaei')}}"> -->
        <div class="col-md-3 col-xs-12">
          <img src="{{asset('images/product-logo/huawei.png')}}" class="img-responsive responsive-img"> <br>
          <!-- <h3 class="text-center">HUAWAEI</h3> -->
          <p>Huawei Technologies Co Ltd is the world's largest telecom equipment maker and China’s largest telephone-network equipment maker.</p>
          <p style="color: blue;" class="text-center">
          <a href="http://e.huawei.com/en/products/cloud-computing-dc/storage" target="_blank" class="btn btn-info">Learn More</a>
          </p>
        </div>

      <!-- </a> -->

      <!-- <a href="{{url('hp')}}"> -->
        <div class="col-md-3 col-xs-12">
          <img src="{{asset('images/product-logo/hp.png')}}" class="img-responsive responsive-img">
          <br>
          <!-- <h3 class="text-center">HP</h3> -->
          <p>Hewlett-Packard is an American multinational information technology company headquartered in Palo Alto, California. Their  vision is to create technology that makes life better for everyone, everywhere.</p>
          <p style="color: blue;" class="text-center">
          <a href="http://www8.hp.com/ph/en/products/proliant-servers/" target="_blank" class="btn btn-info">Learn More</a>
          </p>
        </div>
 
      <!-- </a> -->

      <!-- <a href="{{url('cisco')}}"> -->
        <div class="col-md-3 col-xs-12">
        <img src="{{asset('images/product-logo/cisco.png')}}" class="responsive-img img-responsive">
        <br>
        <!-- <h3 class="text-center">CISCO</h3> -->
        <p>Cisco is the worldwide leader in IT and networking who helps companies of all sizes transform how people connect, communicate, and collaborate. 
 .</p>
         <p style="color: blue;" class="text-center">
         <a href="http://www.cisco.com/c/en/us/products/servers-unified-computing/product-listing.html" target="_blank" class="btn btn-info">Learn More</a>
         </p>
      </div>
    
      <!-- </a> -->

      <!-- <a href="{{url('lenovo')}}"> -->
      <div class="col-md-3 col-xs-12">
        <img src="{{asset('images/product-logo/lenovo.png')}}" class="responsive-img img-responsive">
        <br>
        <!-- <h3 class="text-center">LENOVO</h3> -->
        <p>Lenovo develop,design, manufacture and sell personal computers, tablet computers, smartphones, workstations, servers, electronic storage devices, IT management software, and smart televisions..</p>
        <p style="color: blue;" class="text-center">
        <a href="http://shop.lenovo.com/us/en/systems/servers/" target="_blank" class="btn btn-info">Learn More</a>
        </p>
      </div>
      <!-- </a> -->

    </div>

  </div>
</div>
<br><br>

@endsection