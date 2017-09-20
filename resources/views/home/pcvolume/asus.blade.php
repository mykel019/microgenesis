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
    <!-- <h2 class="margin">ACER</h2> -->
    <!-- <div class="border-line"></div> -->

    <div class="row">
        <div class="col-md-12 col-xs-12">
          <img src="{{asset('images/product-logo/asus.png')}}"  class="img-responsive" style="margin: 0 auto;"><br>
          
          <p>
          ASUS takes its name from Pegasus, the winged horse in Greek mythology that symbolizes wisdom and knowledge. ASUS embodies the strength, purity, and adventurous spirit of this fantastic creature, and soars to new heights with each new product it creates.

          Taiwan’s Information Technology industry has grown enormously over the last few decades and the country is now a dominant force in the global market. ASUS has long been at the forefront of this
          growth and while the company started life as a humble motherboard manufacturer with just a handful of employees, it is now the leading technology company in Taiwan with over 12,500 employees worldwide. ASUS makes products in almost every area of Information Technology too, including PC components, peripherals, notebooks, tablets, servers and smartphones.

          Innovation is key to the success of ASUS. Having unveiled the PadFone to a rapturous audience at Computex 2011, this year, ASUS chairman Jonney Shih raised the bar once more by announcing the TAICHI™ and Transformer Book dual-purpose ultraportables.

          ASUS TAICHI™ is an Ultrabook™ with a unique double-sided multi-touch display that allows it to switch between a tablet and notebook in an instant, simply by lifting its lid. Transformer Book is a convertible Ultrabook that is both a notebook with hard drive and storage and a multi-touch SSD tablet, thanks to its backlit keyboard dock.

          Together with its exciting new range of Windows RT and Windows 8 tablets, ASUS has a dazzling array of innovative products that will surpass users’ imaginations as the world enters a new era of cloud computing.

          This visionary approach is the reason ASUS is able to bring high-quality innovation and design to all, and the reason for its widespread acclaim. ASUS products won 4,256 international awards and accolades in 2013 – that’s over 11 a day, every day. ASUS has consistently achieved significant year-on-year growth in terms of consumer notebook units shipped too, and closed 2011 on a high with revenues hitting US$11.9 billion..</p>

          <br>

          <h1 class="blue"><strong>Products</strong></h1>
        </div>
    </div>
  </div>
</div>
            

          <h1 class="text-center"><strong>Phone</strong></h1>
             <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
             <!--  <img src="{{asset('images/asus/phone1.png')}}" width="450px;" height="500px;">
              <img src="{{asset('images/asus/phone2.png')}}" width="650px;" height="500px;" style="margin-top: 70px;"> -->

              <img src="{{asset('images/asus/phone-bg.png')}}" class="img-responsive">

            </div>
            <div class="text-center">
              <a href="https://www.asus.com/ph/Phone/" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>
          <br>

          <h1 class="text-center"><strong>Notebook & 2 in 1 PC's</strong></h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
              <img src="{{asset('images/asus/notebook.png')}}"  class="img-responsive">
           
            </div>
            <div class="text-center">
              <a href="https://www.asus.com/ph/Notebooks/" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>
          <br>

           <h1 class="text-center">Tablets</h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
              <img src="{{asset('images/asus/tablet.png')}}"  class="img-responsive">
           
            </div>
            <div class="text-center">
              <a href="https://www.asus.com/ph/Tablets/" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>
          <br>

          <h1 class="text-center">Motherboards</h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
              <img src="{{asset('images/asus/motherboard.png')}}"  class="img-responsive" style="margin-top: 40px;">
           
            </div>
            <div class="text-center">
              <a href="https://www.asus.com/ph/Motherboards/" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>

          <br>

          <h1 class="text-center"><strong>Desktop & All-in-One PCs</strong></h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
             <!--  <img src="{{asset('images/asus/desktop.png')}}" style="margin-top: 40px;">
                 <img src="{{asset('images/asus/desktop2.png')}}" style="margin-top: 40px;"> -->

                 <img src="{{asset('images/asus/allinone.png')}}" class="img-responsive">
           
            </div>
            <div class="text-center">
              <a href="https://www.asus.com/ph/Tower-PCs/" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>

          <br>

           <h1 class="text-center"><strong>Monitors</strong></h1>
            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
       <!--        <img src="{{asset('images/asus/monitor.png')}}" style="margin: 40px 0; width: 430px; ">
              <img src="{{asset('images/asus/monitor2.png')}}" style="margin: 40px 0; height: 450px; width: 700px;"> -->

              <img src="{{asset('images/asus/monitors-bg.png')}}" class="img-responsive">

           
            </div>
            <div class="text-center">
              <a href="https://www.asus.com/ph/Monitors/" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>

    </div>

    <div>
      

@endsection