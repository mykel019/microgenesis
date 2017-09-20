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
          <img src="{{asset('images/product-logo/acer.png')}}"  class="img-responsive" style="margin: 0 auto;"><br>
          

          <h3><strong>Breaking down barriers between people and technology</strong></h3>
          <p>Since Acer’s inception, our common goal has always been contributing to society. We believe that the more access people have to technology, the better. This is our reason for being.</p>

          <br>

          <h3><strong>Brand</strong></h3>

          <p>At Acer we believe it only takes one explorer to change the world. And we believe that with the right tools, everyone has the potential to be that explorer.</p>
          <p>We are more than a technology company, we are a nimble team of pioneers. Our passion for technology is rooted in what it enables people to explore and create. We see it as our responsibility to help people push beyond their limits, to spark curiosity and ignite discovery with the products we make. We encourage people to explore their potential and the world around them.</p>
          <p>Acer devices help people uncover their world faster, better and more securely. If you ask us what we do? Simple: We make tools for the modern day explorer.</p>

          <h3><strong>Brand Values</strong></h3>

          <h4><strong>Curios</strong></h4>
          <p>Curiosity is the seed of every innovative idea. Wonderment and imagination make for active minds, open to new worlds and ideas. We see problems not as things to be solved, but as opportunities to better understand the ever-changing needs of our end users.</p>

          <h4><strong>Progressive</strong></h4>
          <p>Staying on the cusp of progress allows us to do what we love best, making people’s lives better through technology. Everything we make should carry our consumers and the industry forward. If it’s not improving lives, it’s not worth making.</p>

          <h4><strong>Human</strong></h4>
          <p>We make products for the many, not the few. Our drive doesn’t come from publicity or awards, but from seeing real people use our products to navigate and create their world.</p>


          <h3><strong>Products</strong></h3>

          <br>

        </div>
        </div>
  </div>
</div>

          <h1 class="text-center"><strong>Laptops</strong></h1>
          <br>
          <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
<!--               <img src="{{asset('images/acer/laptop.png')}}" class="img-responsive">
              <img src="{{asset('images/acer/laptop2.png')}}" class="img-responsive"> -->
              <img src="{{asset('images/acer/laptop-bg.png')}}" class="img-responsive">

            </div>
            <div class="text-center">
              <a href="http://www.acer.com/ac/en/AU/content/group/laptops" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>

          <br>

          <h1 class="text-center"><strong>Desktops</strong></h1>
          <br>

          <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">
            <div class="container" style="text-align: center;">
              
              <!-- <img src="{{asset('images/acer/desktop.png')}}">
              <img src="{{asset('images/acer/desktop2.png')}}"> -->

              <img src="{{asset('images/acer/desktop-bg.png')}}" class="img-responsive">

            </div>
            <div class="text-center">
              <a href="http://www.acer.com/ac/en/AU/content/group/desktops" class="btn btn-default view">View more</a>
              <br><br><br>
           </div>
          </div>

          <br>

           <h1 class="text-center"><strong>Tablets</strong></h1>
           <br>

           <div style="background: radial-gradient(#545454,#1F1F1F)" class="container-fluid">

             <div class="container" style="text-align: center;">
                
              <!--   <img src="{{asset('images/acer/tablet.png')}}">
                <img src="{{asset('images/acer/tablet2.png')}}"> -->
                <img src="{{asset('images/acer/tablet-bg.png')}}" class="img-responsive">

              </div>
              <div class="text-center">
                <a href="http://www.acer.com/ac/en/AU/content/group/tablets" class="btn btn-default view">View more</a>
                <br><br><br>
               
             </div>
           </div>
        
          <br>

          <h1 class="text-center"><strong>Monitors</strong></h1>
          <br>

            <div style="background: radial-gradient(#545454,#1F1F1F);" class="container-fluid">

             <div class="container" style="text-align: center;">
                
              <!--   <img src="{{asset('images/acer/monitor.png')}}">
                <img src="{{asset('images/acer/monitor2.png')}}"> -->

                <img src="{{asset('images/acer/monitor-bg.png')}}" class="img-responsive">

              </div>
              <div class="text-center">
                <a href="http://www.acer.com/ac/en/AU/content/group/monitors" class="btn btn-default view">View more</a>
                <br><br><br>
               
             </div>
           </div>

          <h1 class="text-center"><strong>Projectors</strong></h1>
          <br>


          <div style="background: radial-gradient(#545454,#1F1F1F)" class="container-fluid">

             <div class="container" style="text-align: center;">
                
           <!--      <img src="{{asset('images/acer/projector.png')}}">
                <img src="{{asset('images/acer/projector2.png')}}"> -->

                <img src="{{asset('images/acer/projectors-bg.png')}}" class="img-responsive">

              </div>
              <div class="text-center">
                <a href="http://www.acer.com/ac/en/AU/content/group/projectors" class="btn btn-default view">View more</a>
                <br><br><br>
               
             </div>
           </div>

           <br><br>

    <div>
      
    </div>

@endsection