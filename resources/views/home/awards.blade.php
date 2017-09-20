@extends('app')

@section('css')
  <style type="text/css">


#container {
  width: 60%;
  height: 100%;
  margin: 0 auto;
  padding-top: 40px;
  overflow: hidden!important;
  margin: 0 auto!important;
  border: 3px solid green;
}

.slider-for{
  display: block;
  margin: 0 auto;
  border: 3px solid red;
  max-width: 1000px;
  max-height: 1000px;
    box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.76);


}

.slider-for__item {
  display: inline-block!important;
  /*width: 700px;*/
  max-width: 1000px;
  max-height: 1000px;
  margin: 0 10px;
  background-color: white;
  text-align: center;
  color: black;
  font-size: 2em;
  outline: none;
  margin: 0 auto!important; /*very very important */


}


.slick-list {
  padding-left: 0 !important;
  padding-right: 0 !important;
}

.slider-nav {
  /*max-width: 200px;*/
  width: 400px;
  /*overflow: hidden;*/
  /*background-color: tomato;*/
  max-height: 200px;
  margin: 0 auto;
  cursor: pointer;
  border: 2px solid black;
}


.item-nav {
  width: 200px;
  height: 200px;
/*  padding-left: 5px;
  padding-right: 5px;*/
  border:1px solid white;
}


.slick-slide {
  margin-left: 0;
  margin-right: 20px;
}

  </style>
@endsection

@section('content')


<div class="container-fluid" >
  <div class="row">

    <h2 class="margin text-center"><strong>AWARDS</strong></h2>


<div id="container">

  <div class="slider-for">
    <div class="slider-for__item"><img src="{{asset('images/awards/1 B.jpg')}}"  ></div>
    <div class="slider-for__item"><img src="{{asset('images/awards/2 B.jpg')}}"  ></div>
    <div class="slider-for__item"><img src="{{asset('images/awards/3 B.jpg')}}"  ></div>
  </div>


  <div class="slider-nav">
    <div class="slider-for__item item-nav"><img src="{{asset('images/awards/1 B.jpg')}}"  class="img-responsive" /></div>
    <div class="slider-for__item item-nav"><img src="{{asset('images/awards/2 B.jpg')}}"  class="img-responsive" /></div>
    <div class="slider-for__item item-nav"><img src="{{asset('images/awards/3 B.jpg')}}"  class="img-responsive" /></div>
  </div>

</div>

</div>
</div>

@endsection

@section('js-logic')

  <script type="text/javascript">
    

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  autoplay:true,
  // fade: true,
  asNavFor: '.slider-nav'
});



$('.slider-nav').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  // dots: true,
  centerMode: true,
  focusOnSelect: true,
  variableWidth: true,
});

  </script>
@endsection