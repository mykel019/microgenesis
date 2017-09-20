@extends('app')

@section('css')
@endsection

@section('content')
<div class="divider"></div>

<div class="container" style="padding: 60px;">
  <div class="row">
    <!-- <h2 class="margin">MICROSOFT</h2> -->
    <!-- <div class="border-line"></div> -->

    <div class="row">
      <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/microsoft/anywhere.png')}}" class="img-responsive" style="margin: 0 auto;">
        <br>
        <h2 class="text-center blue"><strong>ModernBiz Business Anywhere</strong></h2>
        <br>
        <img src="{{asset('images/microsoft/Head 2.png')}}" class="img-responsive responsive-img">
        <br>
        

        <div class="row" style="background: #DC3BE2; color: #fff; padding: 10px;">
          <div class="col-md-5">
            <img src="{{asset('images/microsoft/icon1.png')}}" width="150px" height="150px">
            <h2>Tools </h2>
          </div>

          <div class="col-md-7">
            <h3><strong>The tools you need to do your best work anywhere</strong></h3>
            <p>9 out 10 mobile workers spend at least 20% of their work tome away from their primary workplace</p>
          </div>
        </div>
      </div>
  </div>

  <br><br>

  <div class="row">
    
    <div class="col-md-3">
      <img src="{{asset('images/microsoft/a.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
      <br>
      <span><strong>Get your work done on your favorite devices</strong></span>
      <br>
      <p>Get your familiar Microsoft Office experience across devices-Windows, iOS, or Android-with Microsoft Office 365 and Office Online.</p>
    </div>

     <div class="col-md-3">
      <img src="{{asset('images/microsoft/s.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
      <br>
      <span><strong>Your latest files, always ready, anywhere</strong></span>
      <br>
      <p>Easily access and work on your latest files with Microsoft OneDrive for Business in Office 365. Access the latest customer data with Microsoft Dynamics CRM Online.</p>
    </div>

     <div class="col-md-3">
      <img src="{{asset('images/microsoft/d.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
      <br>
      <span><strong>Modern PC's latest let you work longer and faster</strong></span>
      <br>
      <p>Get more done with Microsoft Windows 10 PCs that offer faster boot times, improved responsiveness, and the Battery Saver feature, designed to provide longer battery life..</p>
    </div>

    <div class="col-md-3">
      <img src="{{asset('images/microsoft/f.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
      <br>
      <span><strong>Easy remote access to business resources</strong></span>
      <br>
      <p>Access business applications hosted in the cloud-like CRM, finance or HR apps-on any device using Microsoft Azure RemoteApp..</p>
      
    </div>
  </div>

   <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="row" style="background: #DC3BE2; color: #fff; padding: 10px;">
          <div class="col-md-5">
            <img src="{{asset('images/microsoft/icon2.png')}}" width="150px" height="150px">
            <h2>Experience </h2>
          </div>

          <div class="col-md-7">
            <h3><strong>A familiar experience across PC's and mobile devices</strong></h3>
            <p>41% of business say they work faster as a result of using tablets.</p>
          </div>
        </div>
      </div>
  </div>

  <br>

  <div class="row">

    <div class="col-md-3">
     <img src="{{asset('images/microsoft/g.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
     <br>
     <span><strong>A device for every need and budget</strong></span>
     <br>
     <p>Exciting new touch-enabled Microsoft Windows 10 PCs and devices, including Surface, Lumia, and a range of other brands..</p>
    </div>


     <div class="col-md-3">
     <img src="{{asset('images/microsoft/h.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
     <br>
     <span><strong>Modern devices with no learning curve</strong></span>
      <p>Windows 7 users get up to speed quickly with a familiar experience in Windows 10..</p>
    </div>

     <div class="col-md-3">
     <img src="{{asset('images/microsoft/j.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
     <br>
     <span><strong>A seamless mobile experience</strong></span>
     <p>Windows 10 Continuum transforms "on the fly" between tablet and laptop mode..</p>
      
    </div>

    <div class="col-md-3">
     <img src="{{asset('images/microsoft/k.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
     <br>
     <span><strong>Touch-optimized office apps</strong></span>
     <p>Built for touch, Microsoft Office Mobile apps are designed to work great with Windows 10 devices..</p>
      
    </div>
    
  </div>

  <br>

  <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="row" style="background: #DC3BE2; color: #fff; padding: 10px;">
          <div class="col-md-5">
            <img src="{{asset('images/microsoft/icon3.png')}}" width="150px" height="150px">
            <h2>Connect </h2>
          </div>

          <div class="col-md-7">
            <h3><strong>Be back online in minutes when the unexpected happens</strong></h3>
            <p>40% of business hit by disaster never reopen.</p>
          </div>
        </div>
      </div>
  </div>

  <br>

  <div class="row">
     <div class="col-md-4">
     <img src="{{asset('images/microsoft/l.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
     <br>
     <span><strong>Keep you're open for business even if disaster striked</strong></span>
     <br>
     <p>Get your business back up and running in minutes when the unexpected happens with Microsoft Azure Site Recovery, which offers an automated disaster recovery solution in the cloud without requiring major capital expense.</p>
    </div>

    <div class="col-md-4">
      <img src="{{asset('images/microsoft/z.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
     <br>
     <span><strong>Keep you're open for business even if disaster striked</strong></span>
     <br>
     <p>Get your business back up and running in minutes when the unexpected happens with Microsoft Azure Site Recovery, which offers an automated disaster recovery solution in the cloud without requiring major capital expense.</p>
    </div>

     <div class="col-md-4">
      <img src="{{asset('images/microsoft/x.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
     <br>
     <span><strong>Keep you're open for business even if disaster striked</strong></span>
     <br>
     <p>Get your business back up and running in minutes when the unexpected happens with Microsoft Azure Site Recovery, which offers an automated disaster recovery solution in the cloud without requiring major capital expense.</p>
    </div>

  </div>

  <br>
 
      <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="row" style="background: #DC3BE2; color: #fff; padding: 10px;">
          <div class="col-md-5">
            <img src="{{asset('images/microsoft/icon4.png')}}" width="150px" height="150px">
            <h2>Protect </h2>
          </div>

          <div class="col-md-7">
            <h3><strong>Reduce risk with easier compliance</strong></h3>
            <p>4 out of 10 business decisions makers say that ensuring compliance is one of the biggest challenges in supporting a mobile workforce.</p>
          </div>
        </div>
      </div>
  </div>

  <br>

    <div class="row">
     <div class="col-md-4">
     <img src="{{asset('images/microsoft/c.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
     <br>
     <span><strong>Business controls to help ensure compliant behavior</strong></span>
     <br>
     <p>Microsoft Office 365 includes controls that help businesses stay compliant, like Data Loss Prevention Policy Tips, which can trigger an alert when sensitive information is about to be sent via email.</p>
    </div>

    <div class="col-md-4">
      <img src="{{asset('images/microsoft/v.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
     <br>
     <span><strong>PC and device compliance with Windows 10</strong></span>
     <br>
     <p>Microsoft Windows 10 is able to be deployed in a compliant manner, as Microsoft is continually working to deliver technology that helps customers meet the latest industry and regional certifications.</p>
    </div>

     <div class="col-md-4">
      <img src="{{asset('images/microsoft/b.png')}}" class="img-responsive responsive-img" style="width: 130px; height: 130px;">
     <br>
     <span><strong>Compliance-ready cloud</strong></span>
     <br>
     <p>Meet a range of country and industry compliance requirements with Microsoft Azure and Office 365, which are independently verified to maintain compliance with a broad range of standards.</p>
    </div>

  </div>
  






</div>

@endsection