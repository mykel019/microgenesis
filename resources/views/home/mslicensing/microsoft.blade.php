@extends('app')

@section('css')
  <style type="text/css">
    .img-gray{
      filter: grayscale(100%)!important;
    }

    .img-gray:hover{
      cursor: pointer;
      color: #fff;
      filter: grayscale(0%);
    }

    ul{
      list-style-type: none;
    }


    .list{
      float: left;
      /*background: rgba(0,0,0,0.7);*/
      border: 1px solid lightblue;
      filter: grayscale(0%); 
      background-color: #F2F2F2;
    }


    .list:hover{
      /*filter: grayscale(100%);*/
    }

    .parent-overlay{
      position: relative;
    }


    .images{
      width: 399px;
      height: 225px!important;
      padding: 20px;
    }


    .overlayss{
      width: 100%;
      height: 100%;
      position: absolute;
      /*background: rgba(0,0,0,0)!important;*/
      /*background: rgba(24,186,234,0.6)!important;*/
      transition: .2s ease-in-out;
    }


    .overlayss:hover{
      background: rgba(0,0,0,0.8)!important;
      text-align: center;
      cursor: pointer;
      /*background: rgba(0,0,0,0);*/
    }

    .ms-definition{
      position: absolute;
      color: #ffffff;
      display: none;
      margin-top: 50px;
      font-size: 17px;
    }


  </style>
@endsection

@section('content')
<div class="divider"></div>

  
<div class="container" style="max-width: 1380px; margin: 0 auto;">

  <div class="row">
    <!-- <h2 class="margin">MICROSOFT</h2> -->
    <!-- <div class="border-line"></div> -->

    <div class="row">
        <div class="col-md-12 col-xs-12">
          <img src="{{asset('images/product-logo/ms.png')}}" class="img-responsive" style="margin: 0 auto;"><br>
        </div>

        <div class="col-md-6">
          <p>As the world’s leading software provider, Microsoft strives to produce innovative products that meet the customers’ evolving needs. At the same time, it understands that long-term success is about more than making great products.

          Microsoft’s vision is to “Empower people through great software – anytime, anywhere, and on any device.” To date, the company envisions making each product for an easier and more enjoyable personal csomputing experience; while providing enterprises with more efficient solutions to maximize productivity.

          Microgenesis is the leading Value Added Reseller (VAR) of Microsoft in the Philippines. We have been awarded as the VAR of the year for five consecutive years. We were also honored as the Country Partner of the Year in 2013, besting more than 1,600 local resellers, distributors, and other partners for the accolade. Most recently, we were awarded as a Platinum Partner Winner by Microsoft Asia Pacific as managed reseller.

          All these awards and recognitions are a testament to our commitment to provide the best Microsoft technologies to our customers and partners. We strive to continuously improve our sales and technical capabilities by investing in hardware, software, and human resources to provide the best solutions to those we serve.

          We do this in line with Microsoft’s strategy of building “best-in-class platforms and productivity services for a mobile-first, cloud-first world”.</p>
        </div>

        <div class="col-md-6">
          <img src="{{asset('images/microsoft/Microsoft-Art.png')}}" class="img-responsive" style="height: 500px;width: 450px;">
        </div>
  </div>
  <br>

  </div>
</div>


<div class="container-fluid" style="background-color: lightblue;">
  
  <div class="" style="width: 1380px; margin: 0 auto;">

  <!-- <div class="border-line"></div> -->
  <br>

  <!-- <div class="row"> -->
    <h2 class="text-center blue"><strong>Browse By Product</strong></h2>
    <br><br>
  
    <ul>
      <a href="{{url('endsupport')}}">
        <li class="list">
          <div class="parent-overlay" value="one">
          <div class="overlayss"> 
            <p class="ms-definition" id="one">Easy access to data, big and small for insights on any data. Support includes security patching and maintenance updates , and eliminates the expense of custom support agreements.</p>
          </div>
              <img src="{{asset('images/microsoft/EndOfSupportFeatured-624x220.png')}}" class="img-responsive responsive-img images">
              
          </div>
        </li>
      </a>

      <a href="{{url('modernbiz')}}">
        <li class="list">
          <div class="parent-overlay" value="two">
            <div class="overlayss">
               <p class="ms-definition" id="two">Helps protect business data - whether on-site, in the cloud, or on mobile devices - and minimize the distruptions caused by unexpected events</p>
            </div>
                <img src="{{asset('images/microsoft/safeguard.png')}}" class="img-responsive images">
          </div>
        </li>
      </a>

      <!-- <div class="clearfix"></div> -->

      <a href="{{url('visualstudio')}}">
        <li class="list">
          <div class="parent-overlay" value="three">
            <div class="overlayss">
              <p class="ms-definition" id="three">No matter if you are a startup, a student, a hobbyist, an open source developer or a commercial developer no matter which platform you are targeting or what app you are creating Visual Studio is your tool.</p>
            </div>
                <img src="{{asset('images/microsoft/VisualStudio-624x220.png')}}" class="img-responsive responsive-img images">
          </div>
        </li>
      </a>

      <a href="{{url('office365')}}">
        <li class="list">
          <div class="parent-overlay" value="four">
            <div class="overlayss">
              <p class="ms-definition" id="four">Whether you're working in your office or on the go, you get a familiar, top-of-the-line set of productivity tools. Office applciations -- always the latest versions -- let you create, edit, and share from your PC/MAC or you iOS, Android, or Windows device with anyone in real time.</p>
            </div>
                <img src="{{asset('images/microsoft/365/365.png')}}" class="img-responsive responsive-img images">
          </div>
        </li>
      </a>

      <a href="{{url('azure')}}">
        <li class="list">
          <div class="parent-overlay" value="five">
            <div class="overlayss">
               <p class="ms-definition" id="five">It's a growing collection of integrated analytics, computing, databases, mobile, networking, storage, and web services, all supported bya  network of Microsoft-managed datacenters.</p>
            </div>
                <img src="{{asset('images/microsoft/azure.png')}}" class="img-responsive responsive-img images">
          </div>
        </li>
        </a>

        <a href="{{url('windows10')}}">
          <li class="list">
            <div class="parent-overlay" value="six">
              <div class="overlayss">
                <p class="ms-definition" id="six">Windos 10 will help you grow your business by unlocking new device opportunities, accelerating Office 365 attach, incearsing ROI from infrastructure services, enchancing your app profitability, and capturing new licensing opportunities.</p>
              </div>
                  <img src="{{asset('images/microsoft/windos10.png')}}" class="img-responsive responsive-img images">
            </div>
          </li>
        </a>

        <a href="{{url('biz-anywhere')}}">
          <li class="list">
            <div class="parent-overlay" value="seven">
              <div class="overlayss">
                <p class="ms-definition" id="seven">Business Anywhere focuses on solutions for improving productivity by enabling mobile and remote scenarios. With microsoft, you can offer a range pf solutions that help employees and teams to get their work done anywhere on any device.</p>
              </div>
                  <img src="{{asset('images/microsoft/anywhere.png')}}" class="img-responsive responsive-img images">
            </div>
          </li>
        </a>

        <a href="{{url('ms-services')}}">
          <li class="list">
            <div class="parent-overlay" value="eight">
              <div class="overlayss">
                  <p class="ms-definition" id="eight">Our worldwide team of architects, engineers, consultants, and support professionals are committed to empowering your enterprise to do more and achieve more in a mobile-first, cloud-first world.</p>
              </div>
                  <img src="{{asset('images/product-logo/Microsoft-Services.png')}}" class="img-responsive responsive-img images">
            </div>
          </li>
        </a>
    </ul>
    </div>

  </div>
    <div style="height: 100px; background-color: lightblue;">
</div>


@endsection

@section('js-logic')
  <script type="text/javascript">
    $(document).ready(function(){

      $('.parent-overlay').mouseover(function(){
        id = $(this).attr('value');
        // alert(id);
        $('#'+id).css('display','block');
      })

      $('.parent-overlay').mouseout(function(){
        id = $(this).attr('value');
        $('#'+ id).css('display','none');
      })

      // $('.parent-overlay').mouseout(function(){
      //   $('.ms-definition').css('display','none');
      // })

    })
  </script>
@endsection