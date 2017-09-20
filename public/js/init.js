
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage,1300);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }


$(document).ready(function(){

	$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	});


	$('#head-logo').show();
	$('#head-logo').addClass('animated zoomIn');

	$(window).scroll(function(){
			// var navoffset = $('.header-bg').navoffset();
			var scrolltop = $(this).scrollTop();
			// console.log(scrolltop)
		
		if (scrolltop >= 275) {
	       // $('#nav').show();
	        // $('#nav').fadeIn("fast");
	   
	        $('#nav').css('margin-top','0');
	        // $('#nav').addClass('shrink');

	    } else {
	        // $('#nav').fadeOut("fast");
	        $('#nav').css('margin-top','-200px');
	    }

	    // $('#design-bg').css('top',-(scrolltop * 7) + 'px');

		});	


	// $(window).scroll(function(){
	// 	var scrolltop = $(this).scrollTop();

	// 	if(scrolltop > 775){
	// 		$('#nav').animate({padding:'0'});
	// 	}else{
	// 		$('#nav').animate({padding: '10px'})
	// 	}
	// });

	//click

	  $(function(){

        // $('li a').hover(function(){
        //     $(this).addClass('highlight');
	
        // }, function(){
        //     $(this).removeClass('highlight');
        // });
        // $('#navbar #navigation .menus a').click(function(e){
        //     $('.highlight_stay').removeClass('highlight_stay');
        //     $(this).addClass('highlight_stay');
        // });

	  // $('#navbar #navigation .menus a').click(function(){
	  // 	$(this).css('color','white');
	  // })

    });

	
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	    if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
	        $('#myBtn').fadeIn('fast');
	        $('#back-to-top').fadeIn('fast');
	    } else {
	        // document.getElementById("myBtn").style.display = "none";
	        $('#myBtn').fadeOut('slow');
	        $('#back-to-top').fadeOut('slow');	
	    }
	}


	// $('.click')on('click',function(){
	// 	$(this).modal({
	// 		backdrop: 'dynamic',
	// 		keyboard: false
	// 	})
	// })


	$('#back-to-top').click(function(){
		$("body,html").animate({
			scrollTop: 0
		},600);
		return false;
	});


// var movementStrength = 25;
// 	var height = movementStrength / $(window).height();
// 	var width = movementStrength / $(window).width();

// 	$("#design-bg").mousemove(function(e){
// 	          var pageX = e.pageX - ($(window).width() / 2);
// 	          var pageY = e.pageY - ($(window).height() / 2);
// 	          var newvalueX = width * pageX * -1 - 25;
// 	          var newvalueY = height * pageY * -1 - 50;
// 	          $('#design-bg').css("background-position", newvalueX+"px     "+newvalueY+"px");
// });


	$('.modal').on('show.bs.modal', function (e) {
    	$('body').addClass('test');
	})

	$(".dropdown-toggle").dropdown();


	$('.custom-icon').hover(function(){
		$('.box').slideUp();
	});


	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	})


	$(document).on('click','.clear-form',function(){
		$(".error-msg").remove();
		$('input, select, textarea').val('');

	// $('input').iCheck('uncheck');
	// $.each($("select").selectize(),function(k,v){
	// 	$(v)[0].selectize.clear();
	// });
})

	var timer;
	// ------------------------
	// SUBMIT ON ALL FORM
	// ------------------------
   $(document).off('click',".submit").on('click',".submit",function(){
		var btn = $(this);

		$("#form").ajaxForm({
			// dataType: 'JSON',
			beforeSend:function(){
				btn.button('loading')
			},
			success:function(data){

				par  =  JSON.parse(data);

				if(par.status){

					$('input, select, textarea').val('');
					$('.alert-notification-success').show();
					$('.notif-msg').html(par.response);
					$('.alert-notification-failed').hide();
					$('.alert').delay(2000).fadeOut(500)
					// alert(par.response);		
					$(".error-msg").remove();
					$('input[type="text"], select').popover('destroy');

					$('body').animate({
					        scrollTop: $('.alert').offset().top - 130
					    }, 500);
					// path = base_url+module;
					// window.location.href = path;
				}else{
					$('.alert-notification-success').hide();
					$('.alert-notification-failed').show();
					$('.notif-msg').html(par.response);
					$(".error-msg").remove();
					$('input[type="text"], select').popover('destroy');

				}

				btn.button('reset');
			},
			error:function(data){
				
				$error = data.responseJSON;
				/*reset popover*/	
				$('input[type="text"], select').popover('destroy');

				/*add popover*/
				block = 0;
				$(".error-msg").remove();
				$.each($error,function(k,v){
					var messages = v.join(', ');
					msg = '<div class="error-msg err-'+k+'" ><i class="fa fa-exclamation-circle" style="color:rgb(255, 184, 0)"></i> '+messages+'</div>';
					$('input[name="'+k+'"], textarea[name="'+k+'"], select[name="'+k+'"]').before(msg).attr('data-content',messages);
					if(block == 0){
						try{
							$('html, body').animate({
						        scrollTop: $('.err-'+k).offset().top - 130
						    }, 500);
						}catch(e){
							console.log('error')
						}


					    block++;
					}
				})
				btn.button('reset');
			},
			always:function(){
				btn.button('reset');

			}
		}).submit();

	});


   // SUBMIT ON CONTACT

    $(document).off('click',".send").on('click',".send",function(){

    $("#contact_form").ajaxForm({
      // dataType: 'JSON',
      beforeSend:function(){
        btn.button('loading')
      },
      success:function(data){

      	// alert(data);

      	$('input, textarea').val("");

        par  =  JSON.parse(data);

        if(par.status){

          $('input, select, textarea').val('');

          $('.alert-notification-success').show();
          $('.notif-msg').html(par.response);
          $('.alert-notification-failed').hide();
          $('.alert').delay(2000).fadeOut(500)
          // alert(par.response);   
          $(".error-msg").remove();
          $('input[type="text"], select').popover('destroy');

          $('body').animate({
                  scrollTop: $('.alert').offset().top - 130
              }, 500);
          // path = base_url+module;
          // window.location.href = path;
        }else{
          $('.alert-notification-success').hide();
          $('.alert-notification-failed').show();
          $('.notif-msg').html(par.response);
          $(".error-msg").remove();
          $('input[type="text"], select').popover('destroy');

        }

        btn.button('reset');
      },
      error:function(data){
        
        $error = data.responseJSON;
        /*reset popover*/ 
        $('input[type="text"], select').popover('destroy');

        /*add popover*/
        block = 0;
        $(".error-msg").remove();
        $.each($error,function(k,v){
          var messages = v.join(', ');
          msg = '<div class="error-msg err-'+k+'" ><i class="fa fa-exclamation-circle" style="color:rgb(255, 184, 0)"></i> '+messages+'</div>';
          $('input[name="'+k+'"], textarea[name="'+k+'"], select[name="'+k+'"]').before(msg).attr('data-content',messages);
          if(block == 0){
            try{
              $('html, body').animate({
                    scrollTop: $('.err-'+k).offset().top - 130
                }, 500);
            }catch(e){
              console.log('error')
            }
              block++;
          }
        })
        btn.button('reset');
      },
      always:function(){
        btn.button('reset');

      }
    }).submit();

  });


    $(document).on('click','.send',function(){

    	$('input, textarea').val("");

    });

/*--------------------
| 	SERARCH
----------------------*/
var timer;
$(document).on('keyup','.search',function(){
	$('input.search').addClass('searchSpinner');
	 _filters = $("#form-filters").serialize();
	 // status = $("#users").val();
	clearTimeout(timer);
	timer = setTimeout(
				function(){
					$.ajax({
					   type: "GET",
					   url: base_url+module+'/datatable',
					   data: {"q":$('.search').val(), 'filters': _filters},
					   success: function(res){
					      $(".sub-panel").html(res);
					      $('input.search').removeClass('searchSpinner');
					   }
					});
				},500);
})

	  	// ------------------
	  	// SINGLE DELETE
	  	// ------------------

	  	$(document).on('click','.single-delete',function(){
	  		url = base_url+module+'/destroy';
	  		self = $(this);
	  		idArr = [];
	  		idArr.push($(this).data('id'));

	  		if(confirm('You are about to delete a record!')){
	  			$.post(url,{data:idArr},function(data){
	  				console.log(data)
	  				if($.trim(data) == 'deleted'){
	  					self.parent().closest('tr').remove();
	  					alert('Record Deleted');
	  				}
	  			})
	  		}
	  	})

	  	// ----------
	  	// ACTIVATE
	  	// ----------

     $(document).on('click','.activate',function(){
        id = $(this).data('id');
        tr = $(this).closest('tr');

        $.get(
		  base_url+module+'/activate',
          {id:id},
          function(data){
          	// alert(data);
            par  =  JSON.parse(data);
            tr.remove();
            // $(".alert_activated").slideDown();
            // $('.alert_activated').delay(1000).slideUp()
          $('.alert-notification-success').show();
          $('.notif-msg').html(par.response);
          $('.alert-notification-failed').hide();
          $('.alert').delay(2000).fadeOut(500)
          // alert(par.response);   
          $(".error-msg").remove();
          $('input[type="text"], select').popover('destroy');

          $('body').animate({
                  scrollTop: $('.alert').offset().top - 130
              }, 500);
        })
      })

     // SLIDE EFFECT
    //    $("div").click(function () {
    //       $(this).show("slide", { direction: "left" }, 1000);
    // });

    // $('.custom-icon').hover(function(){
    // 	id = $(this).attr('value');
    // 	// alert(id);
    // 	// $('#one').fadeToggle();
    // 	$('#'+id).show();
    // 	$('#'+id).addClass('animated zoomIn');
    // },function(){
    // 	$(this).removeClass('animated zoomIn');
    // 	$('#'+id).fadeOut(100);
    // });


    // $(document).ready(function(){
    // 	$('.sub-menu .sub-sub-menu-parent').hover(function(){
    // 		$('sub-sub-menu-parent .sub-sub-menu').css('visibility','visible');
    // 	})
    // })


    // $('li a').hover(function(){
        //     $(this).addClass('highlight');
	
        // }, function(){
        //     $(this).removeClass('highlight');
        // });
});


