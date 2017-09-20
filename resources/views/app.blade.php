<!DOCTYPE html>
<html>
    <head>
        <title>Microgenesis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="IT, RedHat, Cisco, IT solutions, Network Security">
        <meta name="description" content="One of the leading IT solutions provider in the Philippines">


        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/css/font-awesome.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/w3.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">

        <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon/favicon-16x16.png')}}">


        <!-- Animate Slider -->
<!--         <link rel="stylesheet" type="text/css" href="{{asset('css/animateslider/jquery.animateSlider.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/animateslider/demo1.css')}}"> -->

        <!-- 3d Gallery -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/3dgallery/demo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/3dgallery/style.css')}}">

       
        <!-- Bootstrap Carousel -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrapcarousel/bootstrapcarousel.css')}}">

        <!-- Semantic UI -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/semantic/semantic.css')}}">
    

        @yield('css')
        

        <script src="{{ asset('js/jquery.min.js') }}"></script>


        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="{{asset('engine1/style.css')}}" />
        <script type="text/javascript" src="{{asset('engine1/jquery.js')}}"></script>

        <!-- End WOWSlider.com HEAD section -->

        <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/slickstyle.css')}}">


    </head>
    <body style="background-color: #F2F2F2;" onload="myFunction();">
    <!-- <div id="loader"></div> -->

<div class='container' id="loader">
  <div class='loader'>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--text'></div>
  </div>
</div>

<!-- #EEEEEE -->

<div id="myDiv" class="animate-bottom" > 
  
      @include('elements/nav')
      @include('elements/nav2')
      @include('elements/header')


        <div style="min-height: 500px;" id="main-content">
            @yield('content')
        </div>

        <div class="container sub-panel text-center" style="min-height: 500px; margin-top: 100px; display: none;">
        </div>
          
      @include('elements/footer')
        

    <!--   <a href="" id="myBtn"><img src="{{asset('images/arrow.png')}}" height="60px" width="60px"></a> -->

      <div id="back-to-top">
          <span class="glyphicon glyphicon-chevron-up"></span>
      </div>

</div>

   
        <script src="{{ asset('js/bootstrap.min.js') }} "></script>

        <!-- Fraction Slider -->
     <!--    <script type="text/javascript" src="{{asset('js/fraction/jquery.fractionslider.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/fraction/main.js')}}"></script> -->

        <!-- Animateslider -->
        <script type="text/javascript" src="{{asset('js/animateslider/jquery.animateSlider.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/animateslider/modernizr.js')}}"></script>
       

        <script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>


        <!-- SCROLLMAGIC -->
        <script type="text/javascript" src="{{asset('scrollmagic/minified/ScrollMagic.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('scrollmagic/minified/plugins/debug.addIndicators.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('scrollmagic/js/lib/greensock/TweenMax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('scrollmagic/js/animation.gsap.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/scrollmagic.js')}}"></script>



        <!-- BootstrapCarousel -->
        <script type="text/javascript" src="{{asset('css/imsroot/js/jquery.form.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrapcarousel/bootstrapcarousel.js')}}"></script>

        <!-- 3dGallery -->
        <script type="text/javascript" src="{{asset('js/3dgallery/modernizr.custom.53451.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/3dgallery/jquery.gallery.js')}}"></script>


        @yield('js-logic')

        <script type="text/javascript" src="{{ asset('js/slickscript.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/contact.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrapValidator.min.js')}}"> </script>
        <script type="text/javascript" src="{{ asset('js/init.js')}}" ></script>


        <script type="text/javascript">
                var timer;
                $(document).on('click','.searching',function(e){
                    e.preventDefault();

                    $('.sub-panel').html('<center><i class="fa fa-spinner fa-pulse fa-5x fa-fw" aria-hidden="true"></i><center>');

                    data = $('#searching').val();

                    if (!data) {
                        alert("input value");
                    }else{
                        $('#main-content').hide();
                        $('.sub-panel').show();

                    clearTimeout(timer);

                    timer = setTimeout(
                        function(){
                            $.ajax({
                                type: "GET",
                                url: "{{url('search/datatable')}}",
                                data: {"q":data},
                                success: function(res){
                                    $('.sub-panel').removeClass('spinner');
                                    $('.sub-panel').html(res);
                                    $('#searching').val("");
                                },
                                error:function(error){
                                    $('.sub-panel').html(error);
                                }
                            });
                        }, 1000);
                    }


                })

        </script>

    </body>
</html>
