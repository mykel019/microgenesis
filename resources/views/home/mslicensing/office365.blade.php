@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 40px;" >

<!--     <h2 class="margin text-center">OFFICE 365</h2>
    <div class="border-line"></div> -->


    <div class="row">
      <div class="col-md-12 col-xs-12">
    
        <img src="{{asset('images/microsoft/365/365.png')}}" class="img-responsive responsive-img">
    
      </div>

    </div>

    <div class="row">
      <div class="col-md-6">
        <h2 class="blue"><strong>Business is better with Microsoft Office 365. It's the Office you know, with additional tools to help yopu work better together</strong></h2>
      </div>
      <div class="col-md-6">
        <img src="{{asset('images/microsoft/office-365-banner.jpg')}}" class="img-responsive responsive-img">
        
      </div>
      <br><br>
      <p>Create, edit, and share Word, Excel, and PowerPoint documents from your PC/Mac, iOS, AndroidTM, or Windows devices, so you can get more done—anytime, anywhere. Plus, with multi-party HD video, content sharing, and shared calendars, you’re always in sync with your team.</p>

      <p>Office 365 updates itself, so you always have the latest features of Word, Excel, PowerPoint, and Outlook. With low upfront costs and the flexibility to add users and services as needed, Office 365 provides the ROI you need to succeed.</p>



    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <span>Office 365 Business Essential</span>
          </div>
          <div class="panel-body">
            <h3>$5.00 user/month</h3>
          </div>
          <div class="panel-footer">
            <span>(annual commitment)</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <span>Office 365 Business</span>
          </div>
          <div class="panel-body">
            <h3>$8.25 user/month</h3>
          </div>
          <div class="panel-footer">
            <span>(annual commitment)</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <span>Office 365 Business Premium</span>
          </div>
          <div class="panel-body">
            <h3>$12.50 user/month</h3>
          </div>
          <div class="panel-footer">
            <span>(annual commitment)</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <h2 class="text-center blue">Office 365 Benefits</h2>
      <div class="col-md-6">
        <img src="{{asset('images/microsoft/messaging-icon.png')}}" class="img-responsive responsive-img">
        <p><strong>Access your email, contacts and calendar</strong>anywhere on any device via Outlook, with built-in spam and malware protection that automatically updates itself.</p>
      </div>

      <div class="col-md-6">
          <img src="{{asset('images/microsoft/Storage.png')}}" class="img-responsive responsive-img">
        <p><strong>Store yp to 1 TB of documents online</strong>to easily acess anywhere on any device share with colleagues and back up your work</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
          <img src="{{asset('images/microsoft/textbox.png')}}" class="img-responsive responsive-img">
        <p><strong>Hold online meetings</strong>for up to 250 participants with screen sharing, audio and video virtual whiteboards,polls and shared notes</p>
      </div>

      <div class="col-md-6">
          <img src="{{asset('images/microsoft/telephone.png')}}" class="img-responsive responsive-img">
        <p><strong>Get telephone technical support for setup and deployment.</strong>Get more support via online Q&A's how to resources and the Office 365 customer community</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
          <img src="{{asset('images/microsoft/Social-Network.png')}}" class="img-responsive responsive-img">
        <p><strong>A private social network</strong>enables your company to stay connected share information across teams and make faster more informed decisions</p>
      </div>

      <div class="col-md-6">
          <img src="{{asset('images/microsoft/Financial-Backed.png')}}" class="img-responsive responsive-img">
        <p><strong>A financially backed 99.9% uptime guarantee</strong>gives you the peace of mind of knowing you can always access your services</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
          <img src="{{asset('images/microsoft/screw.png')}}" class="img-responsive responsive-img">
        <p><strong>Simplify IT management</strong>and save money with a reduced IT infrastructure and coninuous backup and disaster recovery abilities</p>
      </div>

      <div class="col-md-6">
          <img src="{{asset('images/microsoft/Storage.png')}}" class="img-responsive responsive-img">
        <p><strong>Flexible plans to meet your needs</strong>Choose between plans that include online versions of Office or get the full office suite loaded to your favorite devices</p>
      </div>

      <img src="{{asset('images/microsoft/O365-Banner2.png')}}" class="img-responsive responsive-img">

    </div>


</div>

@endsection