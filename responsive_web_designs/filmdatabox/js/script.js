var _body = "",
	_html = "",
	_htmlBody = "",
	_window = "",
	_layout = "",	
	_lazyload = "";

jQuery(document).ready(function($) {
	"use strict";

	_body = jQuery('body');
	_html = jQuery('html');
	_htmlBody = jQuery('html, body');
	_window = jQuery(window);
	_layout = jQuery('.layout');

	initSlickSliders();

	jQuery('a[data-toggle="tab"]').on('shown.bs.tab', function() {
		_window.trigger('lazyload');				
	});	

	jQuery('.modal').on('shown.bs.modal', function() {
		_window.trigger('lazyload');				
	});

	jQuery('.collapse').on('shown.bs.collapse', function() {
		_window.trigger('lazyload');
	});

	// for handle mobile nav
	jQuery('.nav-toggle-btn').on('click', function(e) {
		e.preventDefault();
		_html.toggleClass('nav-expanded');
	});

	// for handle mobile nav
	jQuery('.nav-menu-close a').on('click', function(e) {
		e.preventDefault();
		_html.toggleClass('nav-expanded');
	});

	jQuery('.mo-close-navbox').click(function (e) {
	    e.preventDefault();
		_html.toggleClass('nav-expanded');
	});

	jQuery('.step-readmore-link').on('click', function(e) {
		if(!jQuery(this).hasClass('open')){
			jQuery(this).addClass('open');
			jQuery(this).children('em').text('Less');
			jQuery(this).parents('.step-read-more').children('.read-more-desc').slideDown();

		}else{
			jQuery(this).removeClass('open');
			jQuery(this).children('em').text('Read more');
			jQuery(this).parents('.step-read-more').children('.read-more-desc').slideUp();
		}
	});

    jQuery('.ts-accordion button.ts-collapse-link[data-toggle="collapse"]').click(function(e){
      if (jQuery(window).width() >= 768) {
        e.preventDefault();
        e.stopPropagation();
      }    
    });

    jQuery(".next-step-link a").click(function() {
       jQuery('html,body').animate({ scrollTop:jQuery(this).parents().next().offset().top}, 'slow');
	});

    if(jQuery('.tech-specs').length){
    	var sidebar = new StickySidebar('#ts-sidebar', {
	        containerSelector: '.manage-stickysidebar',
	        innerWrapperSelector: '.ts-sidebar-content',
	        topSpacing: 20,
	        bottomSpacing: 0
	    });
    }
	

    jQuery(".ts-sidebar-content ul li a").click(function() {
	    var targetDiv = jQuery(this).attr('href');
	    jQuery('.ts-sidebar-content ul li').removeClass('active');
	    jQuery(this).parent().addClass('active');
	    console.log(targetDiv);
	    jQuery('html, body').animate({
	        scrollTop: jQuery(targetDiv).offset().top
	    }, 1000);
	});

	jQuery(".step-links li a").click(function() {
	    var steplinksTarget = jQuery(this).attr('href');
	    jQuery('html, body').animate({
	        scrollTop: jQuery(steplinksTarget).offset().top
	    }, 1000);
	});

    /*setTimeout(function(){ 
    	jQuery('#nsignup-modal').modal('show'); 
    }, 1000);*/
	
    /*setTimeout(function(){ 
    	jQuery('.fdx-coockies').addClass('show'); 
    }, 2000);

    jQuery(".coockie-close, .coockie-okbtn").click(function() {
	    jQuery('.fdx-coockies').removeClass('show'); 
	});*/

});

jQuery(window).on('load', function() {
	jQuery.ready.then(function() {

		_html.addClass('window-loaded');

		jQuery('#icon_vgfx').load(THEME_URL+'images/vgfx.svg');

		lazyloadInit();

	});
});


function initSlickSliders() {

	if (jQuery('.testimonial-slider').length) {
		jQuery('.testimonial-slider').slick({
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			infinite: false,
			//appendArrows: jQuery('.testimonial-slider-controls'),
			//appendDots: jQuery('.testimonial-slider-controls'),
			dots: false,
			customPaging: function(slick, index) {
				return '<span></span>';
			}
		});

		jQuery('.testimonial-slider').on('afterChange', function() {
			_window.trigger('lazyload');
		});
		
	}
}


function lazyloadInit(){ // for lagyload images 		
	"use strict";
	if(jQuery('.lazyload').length){	
	
		_lazyload = new Blazy({
			selector:'.lazyload:not(.loaded)', 
			src:'data-original',
			success: function(ele){
				var imgLoader = jQuery(ele).parent('.lazyload-image-loader');
				imgLoader.addClass('loaded');	
				jQuery(ele).addClass('loaded'); 	
			},
			error:function(ele){
				jQuery(ele).parent('.lazyload-image-loader').addClass('b-error');
			}
		});					
								
		_window.off('lazyload').on('lazyload',function(){
			_lazyload.revalidate();
		});
		
		_lazyload.load(jQuery('.stc-header .lazyload'), true);
			
	} 
	  
}
