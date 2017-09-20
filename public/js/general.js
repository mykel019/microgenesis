

$(document).ready(function(){
	$("a.mobile").click(function(){
		$(".sidebar").slideToggle('fast');
	})

	// $('.sidebar #nav-admin a').on('click',function(){
	// 	alert("click");
	// 	$(this).addClass('selected';)
	// })

	$(function(){
        $('li a').hover(function(){
            $(this).addClass('selected_highlight');
        }, function(){
            $(this).removeClass('selected_highlight');
        });
        $('li .side-menu').click(function(){
            $('.selected').removeClass('selected');
            $(this).addClass('selected');
        });
    });
});