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

		jQuery('[data-bs-toggle="tab"]').on('shown.bs.tab', function() {
			_window.trigger('lazyload');			
		});	

		jQuery('.modal').on('shown.bs.modal', function() {
			_window.trigger('lazyload');				
		});

		jQuery('.collapse').on('shown.bs.collapse', function() {
			_window.trigger('lazyload');
		});

		
		// default script
		_html.addClass('window-loaded');
        
        lazyloadInit();

        jQuery('#icon_vgfx').load(SITE_URL+'images/vgfx.svg');

	});
});


function lazyloadInit(){ // for lagyload images 		
	"use strict";
	if(jQuery('.lazyload').length){	
	
		_lazyload = new Blazy({
			container: 'window, .modal',
			selector:'.lazyload:not(.loaded)', 
			src:'data-src',
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

// ----------Home Sliders-----------//
if($('.my-swiper').length){
	var homeSwiper = new Swiper(".my-swiper", {
		spaceBetween: 30,
		loop: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		pagination: {
		  el: ".swiper-pagination",
		  clickable: true,
		},
	});	
}

if($('.my-swiper-logo').length){
	var logoSwiper = new Swiper(".my-swiper-logo", {
		slidesPerView: 6,
		spaceBetween: 30,
		slidesPerGroup: 3,
		loop: true,
		pagination: {
		  el: ".swiper-pagination-logo",
		  clickable: true,
		},
		breakpoints: {
			200:{
				slidesPerView:1
			},
	        767: {
	            slidesPerView: 1,
	        },
	        768: {
	            slidesPerView: 3,
	        },
	        980: {
	            slidesPerView: 4,
	        },
	        1280: {
	            slidesPerView: 6,
	        }
		}
	});
}

if($('.my-swiper-last').length){
	var lastSwiper = new Swiper(".my-swiper-last", {
		slidesPerView: 1,
		spaceBetween: 10,
		slidesPerGroup: 1,
		loop: true,
		pagination: {
		  el: ".swiper-pagination-last",
		  clickable: true,
		},
		breakpoints: {
	        767: {
	          slidesPerView: 2,
	          spaceBetween: 20,
	        }
		}
	});
}

if($('.my-swiper-videos').length){
	var videoSwiper = new Swiper(".my-swiper-videos", {
		slidesPerView: 4,
		spaceBetween: 30,
		slidesPerGroup: 1,
		loop: true,
		pagination: {
		  el: ".swiper-pagination-videos",
		  clickable: true,
		},
		breakpoints: {
			200:{
				slidesPerView:1
			},
	        767: {
	            slidesPerView: 1,
	        },
	        768: {
	            slidesPerView: 2,
	        },
	        980: {
	            slidesPerView: 3,
	        },
	        1280: {
	            slidesPerView: 4,
	        }
		}
	});
}

if($('.my-swiper-related-product').length){
	var relatedProduct = new Swiper(".my-swiper-related-product",{
		slidesPerView: 1,
		spaceBetween: 30,
		slidesPerGroup: 1,
		loop: true,
		pagination: {
		  el: ".swiper-pagination-product",
		  clickable: true,
		},
		breakpoints: {
	        767: {
	          slidesPerView: 4,
	          spaceBetween: 20,
	        }
		}
	})
}

// -------------Date-----------//
if($('.flatpickr').length){
	document.querySelector(".flatpickr").flatpickr({
		inline: true,
		showMonths: 2,
	});	
}
