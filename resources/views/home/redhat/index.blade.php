@extends('app')

@section('css')
  <style type="text/css">
    a.animated-button:link, a.animated-button:visited {
  position: relative;
  display: block;
  margin: 30px auto 0;
  padding: 14px 15px;
  color: #fff;
  font-size:14px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  letter-spacing: .08em;
  border-radius: 0;
  text-shadow: 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.2);
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}
a.animated-button:link:after, a.animated-button:visited:after {
  content: "";
  position: absolute;
  height: 0%;
  left: 50%;
  top: 50%;
  width: 150%;
  z-index: -1;
  -webkit-transition: all 0.75s ease 0s;
  -moz-transition: all 0.75s ease 0s;
  -o-transition: all 0.75s ease 0s;
  transition: all 0.75s ease 0s;
}
a.animated-button:link:hover, a.animated-button:visited:hover {
  color: #FFF;
  text-shadow: none;
}
a.animated-button:link:hover:after, a.animated-button:visited:hover:after {
  height: 450%;
}
a.animated-button:link, a.animated-button:visited {
  position: relative;
  display: block;
  margin: 30px auto 0;
  padding: 14px 15px;
  color: #fff;
  font-size:14px;
  border-radius: 0;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  letter-spacing: .08em;
  text-shadow: 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.2);
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}

a.animated-button.thar-three {
  color: #fff;
  cursor: pointer;
  display: block;
  position: relative;
  background-color: #D64040;
  /*border: 2px solid #D64040;*/
  transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
0s;
}
a.animated-button.thar-three:hover {
  color: #000 !important;
  background-color: transparent;
  text-shadow: nthree;
}
a.animated-button.thar-three:hover:before {
  left: 0%;
  right: auto;
  width: 100%;
}
a.animated-button.thar-three:before {
  display: block;
  position: absolute;
  top: 0px;
  right: 0px;
  height: 100%;
  width: 0px;
  z-index: -1;
  content: '';
  /*color: #000 !important;*/
  color: #fff !important;
  /*background: #D64040;*/
  background: #18BAEA;
  transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);

}
  </style>
@endsection
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 40px;" >

<!--     <h2 class="margin text-center">OFFICE 365</h2>
    <div class="border-line"></div> -->


    <div class="row">
      <div class="col-md-12 col-xs-12">
        <img class="img-responsive responsive-img" src="{{asset('images/redhat.png')}}";">

        <h2 class="blue"><strong>Tried Tested Trusted</strong></h2>
        <p>For IT, past are very bit as important as future performance. That's why for more than a decade, Red Hat® solutions have been trusted in the world’s most rigorous datacenters, handling everything from the critical to the routine. </p>
      </div>
    </div>

    <div class="row" style="background-color: #D64040; padding: 20px;">
      <div class="col-md-2 col-md-offset-1">
        <div class="panel panel-danger">
          <div class="panel-heading">
            
          </div>
          <div class="panel-body">
            <h2 class="text-center red"><strong>100%</strong></h2><p>of Airlines in the Fortune Global 500 rely on Red Hat</p>
          </div>
          <div class="panel-footer">
         
          </div>
        </div>
      </div>


      <div class="col-md-2">
        <div class="panel panel-danger">
          <div class="panel-heading">
            
          </div>
          <div class="panel-body">
            <h2 class="text-center red"><strong>100%</strong></h2><p>of TELCOS in the Fortune Global 500 rely on Red Hat</p>
          </div>
          <div class="panel-footer">
         
          </div>
        </div>
        
      </div>

      <div class="col-md-2">
        <div class="panel panel-danger">
          <div class="panel-heading">
            
          </div>
          <div class="panel-body">
            <h2 class="text-center red"><strong>100%</strong></h2><p>of HealthcCare Companies in the Fortune Global 500 rely on Red Hat</p>
          </div>
          <div class="panel-footer">
         
          </div>
        </div>
        
      </div>

      <div class="col-md-2">
        <div class="panel panel-danger">
          <div class="panel-heading">
            
          </div>
          <div class="panel-body">
            <h2 class="text-center red"><strong>100%</strong></h2><p>of AIrlines in Fortune Global 500 rely on Red Hat</p>
          </div>
          <div class="panel-footer">
         
          </div>
        </div>
        
      </div>

       <div class="col-md-2">
        <div class="panel panel-danger">
          <div class="panel-heading">
            
          </div>
          <div class="panel-body">
            <h2 class="text-center red"><strong>100%</strong></h2><p>of U.S Executive Department rely on Red Hat</p>
          </div>
          <div class="panel-footer">
         
          </div>
        </div>
        
      </div>
 
    </div>

    <br><br>


    <div class="row">
     
      <div class="col-md-6">
        <img src="{{asset('images/redhat/Training.png')}}" class="img-responsive responsive-img">
        <p class="text-center">Improve your in-demmand technology.</p>
      </div>

      <div class="col-md-6">
        <img src="{{asset('images/redhat/Certification.png')}}" class="img-responsive responsive-img">
        <p class="text-center">Make yourself more marketable by certifying your skill level.</p>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-6">
          <img src="{{asset('images/redhat/Consultation.png')}}" class="img-responsive responsive-img">
        <p class="text-center">Team up with us to collaboratively tackle your technology challenges</p>
      </div>

      <div class="col-md-6">
          <img src="{{asset('images/redhat/Support.png')}}" class="img-responsive responsive-img">
        <p class="text-center">get proactive, focused help from the best engineeers in the industry</p>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center blue"><strong>ALL TRAINING COURSES</strong></h1>
        <div class="row" style="background-color:  #D64040;color: #fff;padding: 10px;border: 3px solid #000;">
          <div class="col-md-12"></div>
            <h3>Find the right course</h3>
            <p>Whether you're updating your expertise or building brand new skills, this is where it all begins.</p>
            <p>Master key tasks for Red Hat® Enterprise Linux®, Red Hat JBoss® Middleware. Start building your skills and reputation. Browse our full list of courses and find the course that works for you. </p>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <h1 class="text-center blue"><strong>Top Red Hat Certified Instructor ASEAN 2015</strong></h1>
      <h2 class="text-center red"><strong>TRAIN AND TEST ON RED HAT ENTERPRISE LINUX 7</strong></h2>
      <p>Use the chart to first which background most closely matches yours, Then follow the path for your course progression</p>

      <img src="{{asset('images/redhat/infographic-cert-path.png')}}" class="img-responsive responsive-img">
    </div>
    <br><br><br>

    <div class="row" ">
      <div class="col-md-12">

        <section id="dg-container" class="dg-container">

          <h1 class="text-center blue"><strong>Microgenesis Past Trainings and Certifications</strong></h1>
          <div class="dg-wrapper">
            <a href="#"><img src="images/redhat/1.jpg" alt="image01" class="img-responsive"></a>
            <a href="#"><img src="images/redhat/2.jpg" alt="image02" class="img-responsive"></a>
            <a href="#"><img src="images/redhat/3.jpg" alt="image03" class="img-responsive"></a>
            <a href="#"><img src="images/redhat/4.jpg" alt="image04" class="img-responsive"></a>
            <a href="#"><img src="images/redhat/5.jpg" alt="image05" class="img-responsive"></a>
            <a href="#"><img src="images/redhat/6.jpg" alt="image06" class="img-responsive"></a>
            <a href="#"><img src="images/redhat/7.jpg" alt="image07" class="img-responsive"></a>
            <a href="#"><img src="images/redhat/8.jpg" alt="image08" class="img-responsive"></a>
            <a href="#"><img src="images/redhat/9.jpg" alt="image09" class="img-responsive"></a>
            <a href="#"><img src="images/redhat/10.jpg" alt="image10" class="img-responsive"></a>
          </div>

          <nav>  
            <span class="dg-prev">&lt;</span>
            <span class="dg-next">&gt;</span>
          </nav

      </section>

      </div>
    </div>

    
     <div class="row" style="margin-top: 100px;">
        <div class="col-md-12 col-sm-12 col-xs-12"> <a href="{{url('certification')}}" class="btn btn-sm animated-button thar-three" style="border-radius: 10px;">See Schedule for Training > > ></a> </div>
     </div>
  </div>


@endsection

@section('js-logic')
<script type="text/javascript">
  $(function() {
        $('#dg-container').gallery({
          autoplay  : true
        });
      });
</script>
@endsection
