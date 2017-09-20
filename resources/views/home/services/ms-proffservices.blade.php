@extends('app')


@section('content')

<div class="divider hidden-xs"></div>

<div id="about" class="container" style="padding: 20px 40px;">
  <div class="row">
    <!-- <h2 class="margin text-center">Microsoft Professional Services</h2> -->
    <img src="{{asset('images/product-logo/Microsoft-Services.png')}}" class="img-responsive responsive-img" style="width: 400px; height: 200px;">
    <div class="border-line"></div>

    <div class="row">
 
        <div class="col-md-6 col-xs-12">
          <img src="{{asset('images/proffesional services/Deployment.png')}}" class="img-responsive responsive-img" width="150px;" height="150px;"> 
          <h3 class="blue text-center">Deployment and Migration</h3>
          <p>Microgenesis Microsoft Services implements Microsoft technologies to organizations using the industry's best practices. We provide implementation solutions that ensure a reliable and effecient service deployment for Small & Medium Business and Enterprise Business alike. Our Certified Microsoft Professional provide competent deployment and migration support, customer satisfation guaranteed.</p>
        
        </div>


        <div class="col-md-6 col-xs-12">
          <img src="{{asset('images/proffesional services/consultation.png')}}" class="img-responsive responsive-img" width="150px;" height="150px;">
          <h3 class="blue text-center">Consultation</h3>
          <p>Microgenesis Microsoft Services will help you and your organization maximize the value of your Microsoft technology investment. We will work closely with your organization for a tailored service that will minimize your risk in even the most complex deployment and adoption of Microsoft technologies,in the most efficient and cost-effective way..</p>
          
        </div>

    </div>

    <br>

    <div class="row">
      <div class="col-md-6">
           <img src="{{asset('images/proffesional services/Managed-Services.png')}}" class="img-responsive responsive-img" width="150px;" height="150px;"> 
          <h3 class="blue text-center">Managed Services</h3>
          <p>Microgenesis Microsoft Services is a Managed Service Provider (MSP) that embodies customer service. With our specialized Certified Engineers, we are capable of managing your IT infrastructure's specific functions effectively, providing a proactive management of their system that ensures both efficiency and reliability.</p>

      </div>
      <div class="col-md-6">
           <img src="{{asset('images/proffesional services/Training.png')}}" class="img-responsive responsive-img" width="150px;" height="150px;"> 
          <h3 class="blue text-center">Training</h3>
          <p>Microgenesis Microsoft Services in house Certified Trainers and Instructors have both technical academic and hadns-on expertise and are fully-equiped and ready to give you the specialized knowledge you need in specific Microsoft products or technologies. You can be confident that what you learn will be accurate, complete and up-to-date</p>

      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
           <img src="{{asset('images/proffesional services/Software-Development.png')}}" class="img-responsive responsive-img" width="150px;" height="150px;"> 
          <h3 class="blue text-center">Software Development</h3>
          <p>Microgenesis Microsoft Services a a leading System Integrator, also develops Windows-based applications for organizations with unique and highly-specialized requirements. We provide a wide range of system integration from Small to Enterprise organizations by augmenting and supplementing the features of Microsoft-developed applications.</p>

      </div>
      <div class="col-md-6">
           <img src="{{asset('images/proffesional services/Cloud-Services.png')}}" class="img-responsive responsive-img" width="150px;" height="150px;"> 
          <h3 class="blue text-center">Cloud Services</h3>
          <p>Microgenesis Microsoft Services leverages the benefits of cloud computing, enhancing on-premise infrastructure with cloud-based services. Leveraging on our Hybrid infrastructure Solutions reduces cost for hardware deployment and maintenance. We guarantee a 99.99% uptime for your servers, ensuring the reliability of service. </p>

      </div>
    </div>

    <br><br>

  </div>
</div>

@endsection