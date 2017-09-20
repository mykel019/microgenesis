@extends('app')

@section('css')
<style type="text/css">
  .view{
    padding: 20px 50px;
    background: transparent;
    text-align: center;
    color: #fff;
    font-size: 18px;
  }

    .view:hover{
      background-color: #fff!important;
      color: #000000!important;
      transition: .5s;
    }


    @media screen and (max-width: 670px){
      .view{
        padding: 10px 25px;
        font-size: 14px;
      }
    }

    @media screen and (max-width: 400px){
      .view{
        padding: 8px 23px;
        font-size: 10px;
        margin-top: 10px;
        margin-bottom: 5px;
      }
    }
  </style>
@endsection

@section('content')
<div class="divider"></div>

<div class="container" style="padding: 60px;">
  <div class="row">
    <!-- <h2 class="margin">DELL</h2> -->
    <!-- <div class="border-line"></div> -->

    <div class="row">
        <div class="col-md-12 col-xs-12">
          <img src="{{asset('images/product-logo/dell.png')}}"  class="img-responsive" style="margin: 0 auto;"><br>
    
          <p>Dell is committed to delivering the services, solutions and products our customers need to drive their business goals and suit their lifestyles. By listening to our customers, Dell continues to identify areas to expand our offerings, and in some cases, we have acquired outstanding companies with expertise in those areas. We hope to better serve the customers of the companies we acquire by preserving the characteristics that make that company successful, while leveraging Dell’s strengths to grow the business and expand its offerings to Dell customers globally.</p>
          <br>

          <h1 class="blue"><strong>Products</strong></h1>
    </div>
    </div>
  </div>
</div>

          <h1 class="text-center"><strong>Laptops</strong></h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
              <img src="{{asset('images/dell/laptop.png')}}" class="img-responsive text-center responsive-img">
          
            </div>
            <div class="text-center">
              <a href="http://www.dell.com/ph/business/p/laptops.aspx?c=ph&l=en&s=bsd&~ck=mn" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>

          <br>

          <h1 class="text-center"><strong>Desktops</strong></h1>
          <div style="background: radial-gradient(#FAFAFA,#545454);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
              <img src="{{asset('images/dell/desktop.png')}}" class="img-responsive text-center responsive-img" style="padding: 40px;">
          
            </div>
            <div class="text-center">
              <a href="http://www.dell.com/ph/business/p/desktops.aspx?c=ph&l=en&s=bsd&~ck=mn" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>

          <br>

           <h1 class="text-center"><strong>Tablets</strong></h5>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
              <img src="{{asset('images/dell/tablet.png')}}" class="img-responsive text-center responsive-img" style="padding: 40px;">
          
            </div>
            <div class="text-center">
              <a href="http://www.dell.com/ph/business/p/tablets?s=bsd&~ck=mn" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>

          <br>

          <h1 class="text-center"><strong>Servers</strong></h5>
            <div style="background: radial-gradient(#FAFAFA,#545454);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
              <img src="{{asset('images/dell/servers2.png')}}" class="img-responsive text-center responsive-img" style="padding: 40px 0; ">
          
            </div>
            <div class="text-center">
              <a href="http://www.dell.com/ph/business/p/enterprise-products.aspx?c=ph&l=en&s=bsd&~ck=mn" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>

          <br>

          <h1 class="text-center"><strong>Services</strong></h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
              <img src="{{asset('images/dell/service.png')}}" class="img-responsive text-center responsive-img" style="padding: 40px; border-radius: 10px;">
          
            </div>
            <div class="text-center">
              <a href="http://www.dell.com/learn/ph/en/phbsd1/by-service-type?~ck=mn" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>

    
          <br><br>

        </div>

    <div>
      

@endsection