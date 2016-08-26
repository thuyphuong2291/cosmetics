(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		// js for back to top
	    var offset = 250;
	    var duration = 500;	
	    $('#back_to_top').css("display","none");
	    $(window).scroll(function() {
	        if ($(this).scrollTop() > offset) {
	            $('#back_to_top').fadeIn(duration);
	        } else {
	            $('#back_to_top').fadeOut(duration);
	        }
	    });
	    $('#back_to_top').click(function(event) {
	        event.preventDefault();
	        $('html, body').animate({scrollTop: 0}, duration);
	        return false;
	    })
	    
		// DOM ready, take it away
		$("#menu_btn_smp").click(function(){
			if($("#global_nav").css('display')=='none'){
				$("#global_nav").addClass('active');
			}else{
				$("#global_nav").removeClass('active');
			}
		});

		$("#global_nav ul li.menu-item-has-children").addClass("inactive_child").append('<a class="control_child"></a>');

		$("#global_nav li .control_child").click(function(){
			if($(this).closest('li').find('ul').css('display')=='none'){
				$(this).closest('li').addClass('active_child');
				$(this).closest('li').removeClass('inactive_child');
			}else{				
				$(this).closest('li').addClass('inactive_child');
				$(this).closest('li').removeClass('active_child');
			}
		});	
	});
	
})(jQuery, this);
