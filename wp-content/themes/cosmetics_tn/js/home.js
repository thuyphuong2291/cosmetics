
(function ($, root, undefined) {
    
    $(function () {
        
        'use strict';
        
        // DOM ready, take it away        
        $('body,html').bind('scroll mousedown wheel DOMMouseScroll mousewheel keyup', function (event) {
            
            /*debugging*/
            // $("#infoText").text("Window scrollTop: "+$(window).scrollTop()+" Top Offsets (service, clients):"+$("#service").offset().top+", "+$("#clients").offset().top);
            /*end-debugging*/  

            if($(window).scrollTop() >= ($("#contact_us").offset().top)) {                
                $("#contact_us").css({
                    'background': 'url(images/images/img3.png) fixed top',
                    'background-size': 'cover',
                });
            }else{
                if($(window).scrollTop() >= ($("#keep_in_touch").offset().top)) {
                    $('body').css({
                        'background': 'url(images/images/img3.png) fixed top',
                        'background-size': 'cover',
                    });
                }else{
                    if($(window).scrollTop() >= ($("#design_fabri").offset().top)) {
                        $('body').css({
                            'background': 'url(images/images/img3.png)',
                            'background-size': 'cover',
                            'background-attachment': 'fixed';
                        });
                    }
                    else{
                        $('body').css({
                            'background': '#fff',
                            'background-size': 'cover',
                        });
                    }
                }
                
            }
        }).scroll();
    });
    
})(jQuery, this);
