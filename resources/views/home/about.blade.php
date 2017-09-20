@extends('app')

@section('css')
  <style type="text/css">

  .mision-vision-holder{
    color: #fff;
    line-height: 25px;
    padding: 65px 0 35px 0;
  }

    .title{
      padding-bottom: 15px;
      text-transform: uppercase;
      font-size: 24px;
      font-weight: 700;
      color: white;
    }

    .name-and-company{
      color: #fff;
      font-size: 18px;
      text-transform: uppercase;
    }

    p > span{
      color: #fff;
      font-size: 34px!important;

    }

    #we-are{
      background: url('../images/bg1.jpg') no-repeat;
      background-size: cover;
      background-attachment: fixed;
      color: #fff;
      position: relative;
      width: 100%;
    }

    @media (max-width: 1024px){
      p > span{
        font-size: 18px!important;
      }
    }

    @media (max-width: 590px){
      p > span{
        font-size: 14px!important;
      }

      .indicators-line > .carousel-indicators{
        display: none;
      }
    }

  </style>

@endsection 

@section('content')
<div class="divider hidden-xs"></div>

<div id="about">

    <h2 class="margin" style="text-align: center;"><strong>ABOUT US</strong></h2>
<!-- 
        <div class="container-fluid" style="background-color: #f47321;">
          <div class="container">
              <div class="col-md-12 col-xs-12" style="padding: 50px 0;">
                  <div class="col-md-4" style="text-align: center;">
                    <img src="{{asset('images/ps-icons/vision.png')}}">
                  </div>
                  <div class="col-md-8" style="text-align: center;">
                    <div class="title">Microgenesis Vision</div>
                    <p style="color: white;">To see a vribrant and productive society where people and businesses contribute positively to its development through the use of technology.</p>
                  </div>
              </div>
          </div>
        </div>

        <div class="container-fluid" style="background-color: #0397d6; padding: 50px 0;">
          <div class="container">
            <div class="mission">
              <div class="col-md-4" style="text-align: center;">
                <img src="{{asset('images/ps-icons/mission.png')}}">
            
              </div>
              <div class="col-md-8" style="text-align: center;">
                <div class="title">Microgenesis Mission</div>
                <p style="color: white;">To provide beneficial and cost-effective IT solutions to our customers to enable, equip and empower them to achieve their business goals.</p>
              </div>
            </div>
          </div>
        </div> -->


        <!-- CAROUSEL -->

          <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="3"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="4"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="5"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="6"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="7"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="8"></li>
            </ol>


            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
                <div class="item active">
                   <div style="position: absolute; height: 100%; width: 100%; background: rgba(0,0,0,0.2);">
                    </div>

                    <!-- Slide Background -->
                    <!-- <img src="https://images.pexels.com/photos/207990/pexels-photo-207990.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/> -->
                    <img src="{{asset('images/banners/vision-edit2.jpg')}}" alt="Bootstrap Touch Slider"  class="img-responsive slide-image">

                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="animated zoomInLeft" class="animated flipInX"><span style="color: white; font-weight: 700">Our Vision</span></h1>
                        <p data-animation="animated fadeInLeft" class="animated lightSpeedIn"><span style="color: white; font-size: 24px;">To see vibrant and productive society where people and <br> business contribute positively to its development <br> through the use of technology.</span></p>
                      <!--   <a href="{{url('education')}}" target="_blank" class="btn btn-default animated fadeInUp" data-animation="animated fadeInUp">Learn more</a> -->
                    </div>
                </div>
                <!-- End of Slide -->


                  <!-- Second Slide -->
                <div class="item">
                <div style="position: absolute; height: 100%; width: 100%; background: rgba(0,0,0,0.2);">
                </div>

                    <!-- Slide Background -->
                    <!-- <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/> -->
                    <img src="{{url('images/banners/mission-bg.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image">

                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <h1 data-animation="animated zoomInLeft" class="animated zoomIn"><span style="color: white;">Our Mission</h1>
                        <p data-animation="animated fadeInRight" class="animated fadeInRight"><span style="color: white; font-size: 24px;">To provide beneficial and cost-effective IT solutions to <br> our customers to enable, equip and empower <br> them to achieve their business goals.</span></p>
                        <!--<a href="{{url('documentmanagement')}}" target="_blank" class="btn btn-default animated fadeInLeft" data-animation="animated fadeInRight">Learn more</a> -->
                    </div>
                </div>
                <!-- End of Slide -->

                 <!-- Third Slide -->
                <div class="item">
                <div style="position: absolute; height: 100%; width: 100%; background: rgba(0,0,0,0.2);">
                </div>

                    <!-- Slide Background -->
                    <!-- <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/> -->
                    <img src="{{url('images/banners/integrity.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image">

                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <h1 data-animation="animated zoomInLeft" class="animated zoomIn"><span style="color: white;">Our Core Values</h1>
                        <p data-animation="animated fadeInRight" class="animated fadeInRight"><span style="color: white; font-size: 24px;">We believe that honesty, transparency and truthfullness <br> are the bedrock for our personal <br> and corporate growth.</span></p>
                        <!--<a href="{{url('documentmanagement')}}" target="_blank" class="btn btn-default animated fadeInLeft" data-animation="animated fadeInRight">Learn more</a> -->
                    </div>
                </div>
                <!-- End of Slide -->


                 <!-- Fourth Slide -->
                <div class="item">
                <!-- <div style="position: absolute; height: 100%; width: 100%; background: rgba(0,0,0,0.2);">
                </div> -->

                    <!-- Slide Background -->
                    <!-- <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/> -->
                    <img src="{{url('images/banners/excellence.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image">

                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="animated zoomInRight" class="animated zoomIn"><span style="color: white;">Our Core Values</h1>
                        <p data-animation="animated fadeInRight" class="animated fadeInRight"><span style="color: white; font-size: 24px;">We carry out all plans and actions <br> in a  professional manner that <br>   exceeds our standards.</span></p>
                        <!--<a href="{{url('documentmanagement')}}" target="_blank" class="btn btn-default animated fadeInLeft" data-animation="animated fadeInRight">Learn more</a> -->
                    </div>
                </div>
                <!-- End of Slide -->


                <!-- Fourth Slide -->
                <div class="item">
                <!-- <div style="position: absolute; height: 100%; width: 100%; background: rgba(0,0,0,0.2);">
                </div> -->

                    <!-- Slide Background -->
                    <!-- <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/> -->
                    <img src="{{url('images/banners/teamwork2.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image">

                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <h1 data-animation="animated zoomInLeft" class="animated zoomIn"><span style="color: white;">Our Core Values</h1>
                        <p data-animation="animated fadeInRight" class="animated fadeInRight"><span style="color: white; font-size: 24px;">We believe that the best way to achieve <br> our common goals and objectives is <br>  to work together in synergy under an <br>  atmosphere of independence , trust and opennes.</span></p>
                        <!--<a href="{{url('documentmanagement')}}" target="_blank" class="btn btn-default animated fadeInLeft" data-animation="animated fadeInRight">Learn more</a> -->
                    </div>
                </div>
                <!-- End of Slide -->


                 <!-- Fifth Slide -->
                <div class="item">
                <!-- <div style="position: absolute; height: 100%; width: 100%; background: rgba(0,0,0,0.2);">
                </div> -->

                    <!-- Slide Background -->
                    <!-- <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/> -->
                    <img src="{{url('images/banners/familyspirit.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image">

                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <h1 data-animation="animated zoomInLeft" class="animated zoomIn"><span style="color: white;">Our Core Values</h1>
                        <p data-animation="animated fadeInRight" class="animated fadeInRight"><span style="color: white; font-size: 24px;">We cultivate a family atmosphere in our <br> workplace where there is  mututal <br> concern for each other's welfare.</span></p>
                        <!--<a href="{{url('documentmanagement')}}" target="_blank" class="btn btn-default animated fadeInLeft" data-animation="animated fadeInRight">Learn more</a> -->
                    </div>
                </div>
                <!-- End of Slide -->


                 <!-- Sixth Slide -->
                <div class="item">
             <!--    <div style="position: absolute; height: 100%; width: 100%; background: rgba(0,0,0,0.2);">
                </div> -->

                    <!-- Slide Background -->
                    <!-- <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/> -->
                    <img src="{{url('images/banners/resultoriented.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image">

                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left" style="margin-top: 20px;">
                        <h1 data-animation="animated zoomInLeft" class="animated zoomIn"><span style="color: white;">Our Core Values</h1>
                        <p data-animation="animated fadeInRight" class="animated fadeInRight"><span style="color: white; font-size: 24px;">We go all out to achieve the desired <br> results in all our endeavors.</span></p>
                        <!--<a href="{{url('documentmanagement')}}" target="_blank" class="btn btn-default animated fadeInLeft" data-animation="animated fadeInRight">Learn more</a> -->
                    </div>
                </div>
                <!-- End of Slide -->


                  <!-- Seventh Slide -->
                <div class="item">
                <div style="position: absolute; height: 100%; width: 100%; background: rgba(0,0,0,0.2);">
                </div>

                    <!-- Slide Background -->
                    <!-- <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/> -->
                    <img src="{{url('images/banners/focussaless.jpg')}}" alt="Bootstrap Touch Slider"  class="slide-image">

                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right" style="margin-top: 20px;">
                        <h1 data-animation="animated zoomInRight" class="animated zoomIn"><span style="color: white;">Our Core Values</h1>
                        <p data-animation="animated fadeInRight" class="animated fadeInRight"><span style="color: white; font-size: 24px;">We take a proactive approach to meet <br> our customer's needs and we <br> treat them as our own.</span></p>
                        <!--<a href="{{url('documentmanagement')}}" target="_blank" class="btn btn-default animated fadeInLeft" data-animation="animated fadeInRight">Learn more</a> -->
                    </div>
                </div>
                <!-- End of Slide -->
            
          <!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->
        </div>
        
        



        <!-- END OF CAROUSEL -->



<div class="" id="we-are"> 
  <div class="overlay"></div>
    <div class="container">
      <div class="row">
      <div class="col-md-12 col-xs-12">


        <div class="row" style="background-color: #183544; padding: 20px;">
        <h2 style="color: #fff;padding: 10px; text-align: center;">WHO WE ARE AND WHAT WE'VE BECOME</h2>
          <div class="col-md-6">
            
            <a href="{{asset('images/profile/2.jpg')}}" target="_blank"><img src="{{asset('images/profile/2.jpg')}}" width="550px;" height="250px;" align="left" style=" border-radius: 30px; margin-top: 20px;" class="img-responsive responsive-img border"></a>

          </div>

          <div class="col-md-6">
            <p style="text-align: left; font-size: 17px!important; margin-top: 30px;" class="">Microgenesis Business System is a leading IT solution provider in the Philippines. It provides Network & Communication, IT Security, Data Center Cloud, Cloud Solutions, Software Licensing & Subscription, Training & Education, Data Center Infrastructure, Document Management Solutions, PC Volume Business, Rental Business, Professional Services and Manage Services.</p>

            <p style="font-size: 17px!important;">
              The Company is composed of expert and trusted consultants, advisors, and technical engineees that can help you build, secure, operate, manage and maintain your I.T infrastructure and assets effectively and efficiently.</p>

          </div>
        </div>
      </div>

      <div class="col-md-12 col-xs-12">
      <!-- <h3 style="color: #047AB3; padding: 10px; text-align: center;">WHAT WE'VE BECOME AND PURSUE TO BE</h3> -->

      <div class="row" style="background-color: #183544; padding: 20px;">

        <div class="col-md-6">
            <p class="" style="font-size: 17px!important; margin-top: 40px;">
              Microgenesis was established in 1988 abd has since experienced continuous growth in the IT industry due to its adherence to the principles of "Quality, Proficiency and Service". These principles have guided the company through the years as it serves its customers ranging from the large enterprise to the medium and small businesses.
            </p>
            <p style="text-align: left; font-size: 17px!important;" class="">
            Microgenesis remains steadfast in its commitment to "Making IT easy for you!".
           
            </p>
            <p style="font-size: 17px!important;">
              <!-- Microgenesis remains steadfast in its commitment to "Making IT easy for you!". -->
            </p>
        </div>


        <div class="col-md-6">

           <a href="{{asset('images/profile/1.jpg')}}" target="_blank"><img src="{{asset('images/profile/1.jpg')}}" width="550px;" height="250px;" align="right" style="padding: 10px; border-radius: 30px; margin-top: 30px;" class="img-responsive responsive-img"></a>

        </div>

      </div>

      </div>

    </div>
    <!-- <br> -->
  </div>
</div>


<!--   <div style="height: 100%; background: #18BAEA; padding: 20px;">
    <div class="container">
      <h1 style="color: #fff;"><strong>MICROGENESIS LEADERS</strong></h1>
      <p style="font-size: 20px;"><span>Microgenesis Executive Officer leaders</span></p>
      <div class="row text-center">
        <div class="col-md-4">
        <img src="{{asset('images/executives/jeff.jpg')}}" style="width: 150px; height: 150px; border-radius: 100%;">
        <br><br>
        <div class="name-and-company">
          <span>Jeffrey Choa</span>
        </div>
          <p>
            <span>Executive Director</span>
          </p>
        </div>

        <div class="col-md-4">
        <img src="{{asset('images/executives/rosanna.png')}}" style="width: 150px; height: 150px; border-radius: 100%;">
        <br><br>
          <div class="name-and-company">
            <span>Rosanna Choa</span>
          </div>
          <p>
            <span>President</span>
          </p>
        </div>

        <div class="col-md-4">
        <img src="{{asset('images/executives/Joel.jpg')}}" style="width: 150px; height: 150px; border-radius: 100%;">
        
        <br><br>
          <div class="name-and-company">
            <span>Joel</span>
          </div>
          <p>
            <span>Director - Enterprise Business at Microgenesis Business Systems</span>
          </p>
        </div>
      </div>

            <div class="row text-center">
        <div class="col-md-4">
        <img src="{{asset('images/executives/noel.jpg')}}" style="width: 150px; height: 150px; border-radius: 100%;">
        <br><br>
        <div class="name-and-company">
          <span>Noel Yu</span>
        </div>
          <p>
            <span>BUSINESS DEVELOPMENT MANAGER</span>
          </p>
        </div>

        <div class="col-md-4">
        <img src="{{asset('images/executives/rose.jpg')}}" style="width: 150px; height: 150px; border-radius: 100%;">
        <br><br>
          <div class="name-and-company">
            <span>Rose Sayas</span>
          </div>
          <p>
            <span>Business Development Manager at Microgenesis Business Systems</span>
          </p>
        </div>

        <div class="col-md-4">
        <img src="{{asset('images/user.png')}}" style="width: 150px; height: 150px; border-radius: 100%;">
        <br><br>
          <div class="name-and-company">
            <span>LOCK</span>
          </div>
          <p>
            <span>Position</span>
          </p>
        </div>
      </div>

            <div class="row text-center">
        <div class="col-md-4">
        <img src="{{asset('images/user.png')}}">
        <br><br>
        <div class="name-and-company">
          <span>LOCK</span>
        </div>
          <p>
            <span>Position</span>
          </p>
        </div>

        <div class="col-md-4">
        <img src="{{asset('images/user.png')}}">
        <br><br>
          <div class="name-and-company">
            <span>LOCK</span>
          </div>
          <p>
            <span>Position</span>
          </p>
        </div>

        <div class="col-md-4">
        <img src="{{asset('images/user.png')}}">
        <br><br>
          <div class="name-and-company">
            <span>LOCK</span>
          </div>
          <p>
            <span>Position</span>
          </p>
        </div>
      </div>
    </div>
  <br><br>
  </div> -->



</div>





@endsection