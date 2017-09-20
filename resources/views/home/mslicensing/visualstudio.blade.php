@extends('app')
@section('content')

<div class="divider"></div>

<div id="about" class="container" style="padding: 40px;" >

<!--     <h2 class="margin text-center">OFFICE 365</h2>
    <div class="border-line"></div> -->


    <div class="row">
      <div class="col-md-12 col-xs-12">
        <img src="{{asset('images/microsoft/VisualStudio-624x220.png')}}" class="img-responsive responsive-img">
        <br><br>

        <h2 class="text-center">Visual Studio 2015 is a rich, integrated development environement for creating stunning applications for Windows, Android and IOS as well as modern web applications and cloud services.</h2>
       
      </div>
    </div>

    <br>

    <div class="row" style="background: #682BAC; color: #FFF; padding: 20px;">
      <div class="col-md-6">
        <ul style="font-size: 16px;line-height: 50px;">
          <li>Tools and service for projects of any size or complexity</li>
          <li>C#, Visual Basic, F#, C++, Python, Node.js and HTML/JavaScript</li>
          <li>Sprint planning</li>
          <li>Advanced debugging, automated and manual testing and profiling </li>
          <li>DevOps with automated deployments and continuous monitoring</li>
        </ul>
      </div>
      <div class="col-md-6">
        <img src="{{asset('images/microsoft/visualstudio/IC842439.png')}}">
      </div>
    </div>

    <br>

    <div class="row">
     <h2 class="text-center"><strong>Visual Studio 2015 products and subscription</strong></h2>
    </div>

    <br>

    <div class="row">
      <div class="col-md-4">
        <img src="{{asset('images/microsoft/visualstudio/IC848236.png')}}" class="img-responsive responsive-img">
       <h3 class="text-center">Visual Studio Community</h3>
       <p class="text-center">Free, full-featured, and extensible tool for developers building non-enterprise applications</p>
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/microsoft/visualstudio/IC809297.png')}}" class="img-responsive responsive-img">
        <h3 class="text-center">Visual Studio Professional</h3>
        <p class="text-center">Professional developer tools and services for individual developers or small teams</p>
      </div>
      <div class="col-md-4">
        <img src="{{asset('images/microsoft/visualstudio/IC809296.png')}}" class="img-responsive responsive-img">
        <h3 class="text-center">Visual Studio Enterprise</h3>
        <p class="text-center">Enterprise grade solution with advanced capabilities for teams working on projects of any size or complexity, including advanced testing and DevOps</p>
        
      </div>
    </div>

    <div class="row text-center"> 
      <div class="col-md-4">
        <h2 class="blue"><strong>How about this for a price?</strong></h2>
        <h2>Free</h2>
        <br>
        <a href="https://go.microsoft.com/fwlink/?LinkId=691978&clcid=0x409" class="btn btn-success" target="_blank">Free Community</a>
      </div>

      <div class="col-md-4">
        <h2 class="blue"><strong>Price starting at</strong></h2>
        <br>
        <h2>$45/Month</h2>
        <br>
        <a href="https://go.microsoft.com/fwlink/?LinkId=691980&clcid=0x409" class="btn btn-success" target="_blank">Professional</a>
      </div>

      <div class="col-md-4">
        <h2 class="blue"><strong>Price starting at</strong></h2>
        <br>
        <h2>$250/Month</h2>
        <br>
        <a href="https://go.microsoft.com/fwlink/?LinkId=691979&clcid=0x409" class="btn btn-success" target="_blank">Enterprise</a>
      </div>
    </div>

    <br><br>

    <div class="row" style="background: #682BAC; color: #FFF; padding: 20px;">
      <div class="col-md-6">
       <h2><strong>Now with Xamarin</strong></h2>
       <br>
       <h3>Deliver native Android, IOS and Windows apps using existing skills, teams and code</h3>
       <br>
       <center><a href="" class="btn btn-success btn-lg">Learn More</a></center>
      </div>
      <div class="col-md-6">
        <img src="{{asset('images/microsoft/visualstudio/Xamarin-swimlane-image.png')}}" class="img-responsive">
      </div>
    </div>
    <br>

    <div class="row">
      <h1 class="blue text-center"><strong>Visual Studio Community</strong></h1>
      <h2 class="text-center">Create multi-platform apps for Windows, iOS, Android and more by using a single IDE.</h2>
      <br>
      <div class="col-md-4">
        <img src="{{asset('images/microsoft/visualstudio/IC835532.png')}}" class="img-responsive responsive-img">
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/microsoft/visualstudio/IC806116.png')}}" class="img-responsive responsive-img">
        
      </div>

      <div class="col-md-4">
        <img src="{{asset('images/microsoft/visualstudio/IC806117.png')}}" class="img-responsive responsive-img">
        
      </div>

  
    </div>

    <br><br>

      <center><a href="https://www.visualstudio.com/post-download-vs?sku=community&clcid=0x409" class="btn btn-success" target="_blank">Download Community 2015</a></center>

</div>

@endsection