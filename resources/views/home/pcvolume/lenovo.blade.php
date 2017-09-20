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
      }
    }
  </style>
@endsection

@section('content')
<div class="divider"></div>

        <div class="container" style="padding: 60px;">
          <div class="row">
            <!-- <h2 class="margin">LENOVO</h2> -->
            <!-- <div class="border-line"></div> -->

            <div class="row">
                <div class="col-md-12 col-xs-12">
                  <img src="{{asset('images/product-logo/lenovo.png')}}"  class="img-responsive" style="margin: 0 auto;"><br>
            
                  <p class="indent">Lenovo is a 46 Billion-Dollar global personal technology company with 58,000 employees in 160 countries. They design, develop, manufacture and sell personal computers, tablet computers, smartphones, workstations servers, electronic storage devices, IT management software, and smart televisions.</p>

                  <br>
                  <h1 class="blue"><strong>Products</strong></h1>
              
            </div>
            </div>
          </div>
        </div>

          <h1 class="text-center"><strong>Laptops</strong></h1>
              <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">

             <div class="container" style="text-align: center;">
                
               <!--  <img src="{{asset('images/lenovo/laptop.png')}}" width="450px;" style="padding: 20px 0;">
                <img src="{{asset('images/lenovo/laptop2.png')}}" width="450px;" style="padding: 20px 0;"> -->

                <img src="{{asset('images/lenovo/laptop-bg.png')}}" class="img-responsive">

              </div>
              <div class="text-center">
                <a href="http://shopap.lenovo.com/ph/en/laptops/?menu-id=laptops" class="btn btn-default view">View more</a>
                <br><br><br>
             </div>
           </div>
          <br>


           <h1 class="text-center"><strong>Tablets</strong></h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">

             <div class="container" style="text-align: center;">
                
               <!--  <img src="{{asset('images/lenovo/tablet.png')}}" width="450px;">
                <img src="{{asset('images/lenovo/tablet2.png')}}" width="450px;"> -->

                <img src="{{asset('images/lenovo/tablet-bg.png')}}" class="img-responsive">

              </div>
              <div class="text-center">
                <a href="http://shopap.lenovo.com/ph/en/tablets/?menu-id=tablets" class="btn btn-default view">View more</a>
                <br><br><br>
             </div>
           </div>
          <br>

          <h1 class="text-center"><strong>Desktops & All in One</strong></h1>
               <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">

             <div class="container" style="text-align: center; padding: 40px 0;">
                
            <!--     <img src="{{asset('images/lenovo/desktop.png')}}" width="500px;">
                <img src="{{asset('images/lenovo/all-in-one.png')}}" width="500px;"> -->

                <img src="{{asset('images/lenovo/desktop-bg.png')}}" class="img-responsive">

              </div>
              <div class="text-center">
                <a href="http://shopap.lenovo.com/ph/en/desktops/?menu-id=desktops_all-in-ones" class="btn btn-default view">View more</a>
                <br><br><br>
             </div>
           </div>

          <br>

          <h1 class="text-center"><strong>Smartphones</strong></h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">

             <div class="container" style="text-align: center; padding: 40px 0;">
                
              <!--   <img src="{{asset('images/lenovo/smartphones.png')}}" width="">
                <img src="{{asset('images/lenovo/smartphone2.png')}}" width=""> -->

                <img src="{{asset('images/lenovo/smartphones-bg.png')}}" class="img-responsive">

              </div>
              <div class="text-center">
                <a href="http://shopap.lenovo.com/ph/en/smartphones/?menu-id=smartphones" class="btn btn-default view">View more</a>
                <br><br><br>
             </div>
           </div>
          <br>

    <!--       <h5>Workstations</h5>
          <p><a href="http://shopap.lenovo.com/ph/en/workstations/?menu-id=workstations" class="blue" target="_blank">http://shopap.lenovo.com/ph/en/workstations/?menu-id=workstations</a></p> -->

          <br>
          
          <h1 class="text-center"><strong>Server & Storage</strong></h1>
             <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">

             <div class="container" style="text-align: center; padding: 40px 0;">
                
              <!--   <img src="{{asset('images/lenovo/smartphones.png')}}" width="">
                <img src="{{asset('images/lenovo/smartphone2.png')}}" width=""> -->

                <img src="{{asset('images/lenovo/servers-bg.png')}}" class="img-responsive">

              </div>
              <div class="text-center">
                <a href="http://shopap.lenovo.com/ph/en/systems/?menu-id=servers_storage" class="btn btn-default view">View more</a>
                <br><br><br>
             </div>
           </div>

          <br>

  <!--         <h5>Accessories and Software</h5>
          <p><a href="http://shopap.lenovo.com/ph/en/accessories/?menu-id=accessories_software" class="blue" target="_blank">http://shopap.lenovo.com/ph/en/accessories/?menu-id=accessories_software</a></p>

          <br>

          <h5>Services & Warranty</h5>
          <p><a href="http://shopap.lenovo.com/ph/en/services-warranty/?menu-id=services_warranty" class="blue" target="_blank">http://shopap.lenovo.com/ph/en/services-warranty/?menu-id=services_warranty</a></p> -->


      



@endsection