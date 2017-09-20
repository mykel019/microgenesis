@extends('app')

@section('css')
@endsection

@section('content')
<div class="divider"></div>

<div class="container" style="padding: 60px;">

    <!-- <h2 class="margin">MICROSOFT</h2> -->
    <!-- <div class="border-line"></div> -->

    <div class="row">
        <div class="col-md-12 col-xs-12">
          <img src="{{asset('images/product-logo/autodesk.png')}}" class="img-responsive" style="margin: 0 auto;">
          <p>
            Autodesk, Inc., is a leader in 3D design, engineering and entertainment software. Since its introduction of AutoCAD software in 1982, Autodesk continues to develop the broadest portfolio of 3D software for global markets.

            Customers across the manufacturing, architecture, building, construction, and media and entertainment industries—including the last 19 Academy Award winners for Best Visual Effects—use Autodesk software to design, visualize, and simulate their ideas before they’re ever built or created.

            From blockbuster visual effects and buildings that create their own energy, to electric cars and the batteries that power them, the work of our 3D software customers is everywhere you look.

            Through our apps for iPhone, iPad, iPod, and Android, we’re also making design technology accessible to professional designers and amateur designers, homeowners, students, and casual creators — anyone who wants to create and share their ideas with the world.</p>
        </div>

  </div>

  <div class="row">
 <!--    <div class="col-md-3">
    <a href="">
      <img src="{{asset('images/autodesk/promos-002-624x624.png')}}" class="img-responsive responsive-img">
      </a>
    </div> -->

    <div class="col-md-3">
    <a href="{{url('autocad-lt')}}">
      <img src="{{asset('images/autodesk/autocad-lt-2017-badge-256px.jpg')}}" class="img-responsive responsive-img">
    </a>
    </div>

    <div class="col-md-3">
    <a href="{{url('autocad')}}">
      <img src="{{asset('images/autodesk/autocad-2017-badge-256px.jpg')}}" class="img-responsive responsive-img">
    </a>
    </div>

    <div class="col-md-3">
    <a href="{{url('ds-standard')}}">
      <img src="{{asset('images/autodesk/building-design-suite-standard-2017-badge-256px.jpg')}}" class="img-responsive responsive-img">
    </a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
    <a href="{{url('ds-premium')}}">
      <img src="{{url('images/autodesk/building-design-suite-premium-2017-badge-256px.jpg')}}" class="img-responsive responsive-img">
    </a>
    </div>

    <div class="col-md-3">
    <a href="{{url('ds-ultimate')}}">
      <img src="{{url('images/autodesk/building-design-suite-ultimate-2017-badge-256px.jpg')}}" class="img-responsive responsive-img">
    </a>
    </div>

    <div class="col-md-3">
    <a href="{{url('ds-infrastructure')}}">
      <img src="{{url('images/autodesk/infrastructure-design-suite-2017-badge-256px.jpg')}}" class="img-responsive responsive-img">
    </a>
    </div>

    <div class="col-md-3">
    <a href="{{url('revit-suite')}}">
      <img src="{{url('images/autodesk/revit-collaboration-suite-2017-badge-256px.jpg')}}" class="img-responsive responsive-img">
    </a>
    </div>
  </div>
</div>


@endsection