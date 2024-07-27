var _body = "",
	_html = "",
	_htmlBody = "",
	_window = "",
	_layout = "",	
	_lazyload = "";


	jQuery(window).on('load', function() {
		jQuery.ready.then(function() {
		"use strict";

			_body = jQuery('body');
			_html = jQuery('html');
			_htmlBody = jQuery('html, body');
			_window = jQuery(window);
			_layout = jQuery('.layout');

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
			jQuery('.navbar-toggler').on('click', function(e) {
				e.preventDefault();
				_body.toggleClass('ovr-hidden');
			});

			// default script
			jQuery('#icon_vgfx').load(THEME_URL+'images/vgfx.svg');

			/*if(jQuery('.navbar-toggler.collapsed')){
				_body.addClass('ovr-hidden');
			}else{
				_body.removeClass('ovr-hidden');
			}*/

			lazyloadInit();
			initSlickSliders();

			_html.addClass('window-loaded');

		});

	});

	



function initSlickSliders() {

	if ( jQuery('.work-content').length ) {

		jQuery('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			draggable: false,
			asNavFor: '.slider-nav',
			fade: true
		});
 		jQuery('.slider-nav').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: true,
			focusOnSelect: true,
			fade: false,
			dots: false,
			arrows: true,
			infinite: true,
			mobileFirst: true,
			touchMove: true,
			responsive: [
        {
           breakpoint: 768,
           settings: "unslick"
        }
     ]
	 	});

		jQuery('.slider-thumb-slide[data-slide]').click(function(e) {
			e.preventDefault();

			var slideno = jQuery(this).data('slide');
			console.log(slideno);
			jQuery('.slider-for').slick('slickGoTo', slideno - 1);
			jQuery('.slider-thumb-slide').removeClass('slick-current');
			jQuery('.slider-thumb-slide').removeClass('active');
			jQuery(this).addClass('slick-current');

		});

		jQuery(window).resize(function () {
		   jQuery('.slider-nav').slick('resize');
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

			_lazyload.load(jQuery(".lazyload[data-preload=\"true\"]:not('.loaded')"), true);
		});

		_lazyload.load(jQuery(".lazyload[data-preload=\"true\"]:not('.loaded')"), true);
			
	} 
	  
}