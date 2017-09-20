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
    <!-- <h2 class="margin"></h2> -->
    <!-- <div class="border-line"></div> -->

    <div class="row">
        <div class="col-md-12 col-xs-12">
          <img src="{{asset('images/product-logo/hp.png')}}"  class="img-responsive" style="margin: 0 auto;"><br>
    
          <p>Our vision is to create technology that makes life better for everyone, everywhere — every person, every organization, and every community around the globe. This motivates us — inspires us — to do what we do. To make what we make. To invent, and to reinvent. To engineer experiences that amaze. We won’t stop pushing ahead, because you won’t stop pushing ahead. You’re reinventing how you work. How you play. How you live. With our technology, you’ll reinvent your world. This is our calling. This is a new HP.</p>

          <p><strong>Keep reinventing</strong></p>

          <h1 class="blue"><strong>List of products</strong></h1>
    </div>
    </div>
  </div>
</div>
          <br>

          <h1 class="text-center">Laptops and Tablets</h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">

             <div class="container" style="text-align: center;">
                
            <!--     <img src="{{asset('images/hp/laptop.png')}}" width="450px;" style="padding: 20px 0;">
                <img src="{{asset('images/hp/tablet2.png')}}" width="450px;" style="padding: 20px 0;"> -->

                <img src="{{asset('images/hp/laptop-tablet-bg.png')}}" class="img-responsive">

              </div>
              <div class="text-center">
                <a href="http://store.hp.com/us/en/ContentView?eSpotName=laptops&storeId=10151&catalogId=10051&langId=-1" class="btn btn-default view">View more</a>
                <br><br><br>
               
             </div>
           </div>
          <br>

           <h1 class="text-center">Desktops</h1>
            <div style="background: radial-gradient(#FAFAFA,#545454);" class="container-fluid">

             <div class="container" style="text-align: center;">
                
                <!-- <img src="{{asset('images/hp/desktop.png')}}" class="img-responsive"> -->
                <img src="{{asset('images/hp/desktop-bg.png')}}" class="img-responsive">

              </div>
              <div class="text-center">
                <a href="http://store.hp.com/us/en/ContentView?eSpotName=desktops&storeId=10151&catalogId=10051&langId=-1" class="btn btn-default view">View more</a>
                <br><br><br>
               
             </div>
           </div>
          <br>


          <h1 class="text-center">Printers</h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">

               <div class="container" style="text-align: center;">
                  
                  <img src="{{asset('images/hp/printer.png')}}" class="img-responsive">
                

                </div>
                <div class="text-center">
                  <a href="http://store.hp.com/us/en/ContentView?eSpotName=printers&storeId=10151&catalogId=10051&langId=-1" class="btn btn-default view">View more</a>
                  <br><br><br>
                 
               </div>
             </div>
          <br>


          <h1 class="text-center">Ink & Toner</h1>
              <div style="background:radial-gradient(#FAFAFA,#545454);" class="container-fluid">

                 <div class="container" style="text-align: center;">
                    
                <!--     <img src="{{asset('images/hp/ink1.png')}}" style="padding: 20px 0;">
                    <img src="{{asset('images/hp/ink2.png')}}" style="width: 474px; height: 356px; padding: 20px 0;"> -->

                    <img src="{{asset('images/hp/ink-bg.png')}}" class="img-responsive">

                  </div>
                  <div class="text-center">
                    <a href="http://store.hp.com/us/en/cat/ink--toner---paper" class="btn btn-default view">View more</a>
                    <br><br><br>
                   
                 </div>
               </div>
          <br>

          <h1 class="text-center">Display and Accessories</h1>
              <div style="background:radial-gradient(#545454,#1F1F1F);" class="container-fluid">

                 <div class="container" style="text-align: center;">
                    
                    <img src="{{asset('images/hp/accessories.png')}}" class="img-responsive" style="padding: 30px 0;">

                  </div>
                  <div class="text-center">
                    <a href="http://store.hp.com/us/en/ContentView?eSpotName=Accessories&storeId=10151&catalogId=10051&langId=-1" class="btn btn-default view">View more</a>
                    <br><br><br>
                   
                 </div>
               </div>
          <br>

      <!--     <h1 class="text-center">Business Solutions</h1>
              <div style="background:radial-gradient(#545454,#1F1F1F);" class="container-fluid">

                 <div class="container" style="text-align: center;">
                    
                    <img src="{{asset('images/hp/accessories.png')}}" class="img-responsive" style="padding: 30px 0;">

                  </div>
                  <div class="text-center">
                    <a href="http://store.hp.com/us/en/ContentView?eSpotName=Accessories&storeId=10151&catalogId=10051&langId=-1" class="btn btn-default view">View more</a>
                    <br><br><br>
                   
                 </div>
               </div> -->



        </div>


    <div>
      

@endsection