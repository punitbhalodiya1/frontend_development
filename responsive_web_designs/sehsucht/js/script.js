var _body = "",
	_html = "",
	_htmlBody = "",
	_window = "",
	_interTime = "",	
	_layout = "",
	_tbl = "";
	_lazyload = "",
	_header = "",
	_topScrollEle = "";;
	

jQuery(document).ready(function() {
		
	_body = jQuery('body');
	_html = jQuery('html');
	_htmlBody = jQuery('html, body');
	_window = jQuery(window);
	_layout = jQuery('.layout');
	_tbl = jQuery('.fs');
	_header = jQuery('.main-navigation');
	_topScrollEle  = jQuery('.top-scroll');
					
	tblScreen();
	rSliderFunction();
	moreDescription();
		
	_window.load(function() {										
		
		_window.on('resize customResize',function() {																	
				
			if(_interTime){
				clearTimeout(_interTime);
				_interTime = "";
			}
			
			_interTime = setTimeout(function(){								
				
				tblScreen();
				rSliderFunction();
				moreDescription();
							
			}, 0);							
	 
		}).trigger('customResize');	
		
		setTimeout(function(){
			lazyloadInit();
			_html.addClass('window-loaded-delay');
		},1000);
		
		_html.addClass('window-loaded');
		
		//for start image lazyload after window load
		rSliderFunction();
							
    });
	
	//scroll arrow
	/*_topScrollEle.on('click',function(){
		_htmlBody.stop(true, false).animate({scrollTop:0},700);
	});
	
	_window.on('scroll navScroll',function(){		
		var t = _window.scrollTop();
		if(t > (_window.height()/2)){
			_topScrollEle.show();
		}else{
			_topScrollEle.hide();
		}
	});*/
	
	jQuery('.collaps-overlay a').on('click', function(){
		jQuery(this).parents('.collaps-text-part').addClass('h-auto');
		jQuery(this).parent('.collaps-overlay').hide();
	});
	
	jQuery('.team-collaps-overlay a').on('click', function(){
		jQuery(this).parents().children('.team-cell-content').addClass('h-auto');
		jQuery(this).parent('.team-collaps-overlay').hide();
	});
	
	jQuery('.play-btn.white').on('click', function(){
		var getUrl = jQuery(this).attr('data-url');
		jQuery(this).hide();
		jQuery(this).parents().children('#voltage-video').html('<iframe width="560" height="315" src="'+getUrl+'?autoplay=1" frameborder="no" allowfullscreen></iframe>');
	});
	
	jQuery('.play-btn.gray').on('click', function(){
		var getUrl = jQuery(this).attr('data-url');
		jQuery(this).hide();
		jQuery(this).parents().children('#nike-video').html('<iframe width="560" height="315" src="'+getUrl+'?autoplay=1" frameborder="no" allowfullscreen></iframe>');
	});
	
	jQuery('.play-btn.green').on('click', function(){
		var getUrl = jQuery(this).attr('data-url');
		jQuery(this).hide();
		jQuery(this).parents().children('#moderat-video').html('<iframe width="560" height="315" src="'+getUrl+'?autoplay=1" frameborder="no" allowfullscreen></iframe>');
	});
	
	jQuery('.play-btn.orange').on('click', function(){
		var getUrl = jQuery(this).attr('data-url');
		jQuery(this).hide();
		jQuery(this).parents().children('#bmw-video').html('<iframe width="560" height="315" src="'+getUrl+'?autoplay=1" frameborder="no" allowfullscreen></iframe>');
	});
	
	jQuery('body').doScroller({
		nav:'',
		transitionSpeed: 750,
		pageClass: "scroller-part",
		scrollOffset: -25		
	});
	
	jQuery('.logo').click(function(){
		doScroller.goTo(1);
	});
	jQuery('.goto-vr').click(function(){
		doScroller.goTo(4);
	});
	jQuery('.goto-ar').click(function(){
		doScroller.goTo(6);
	});
	jQuery('.goto-web').click(function(){
		doScroller.goTo(3);
	});
	jQuery('.goto-webgl').click(function(){
		doScroller.goTo(3);
	});
	jQuery('.goto-unreal').click(function(){
		doScroller.goTo(2);
	});
	jQuery('.goto-apps').click(function(){
		doScroller.goTo(7);
	});
	jQuery('.goto-games').click(function(){
		doScroller.goTo(7);
	});
	
	/*jQuery('.hover-blur').on('mouseenter', function(){
		jQuery(this).addClass('blur-img');
	});
	jQuery('.hover-blur').on('mouseleave', function(){
		jQuery(this).removeClass('blur-img');
	});*/
	
	
											
});


function rSliderFunction(){
	
	if(jQuery('#mission-stat-slider').length){
		var missionSliderEle = jQuery('#mission-stat-slider'),
			missionStatSlider = "";
	
		missionStatSlider = missionSliderEle.royalSlider({
			arrowsNav: true,
			autoHeight: true,
			autoScaleSlider:false,
			arrowsNavAutoHide: false,
			fadeinLoadedSlide: false,
			controlNavigationSpacing: 0,
			controlNavigation: 'none',
			imageScaleMode: 'fill',
			imageAlignCenter:false,
			blockLoop: true,
			loop: true,
			startSlideId:0,
			transitionType: 'slide',
			keyboardNavEnabled: false,
			addActiveClass:true,
			navigateByClick:false,
			sliderDrag:true,
			autoPlay: {
				delay:5000,
				enabled: false,
				pauseOnHover: false
			}
		}).data('royalSlider');
		
		missionStatSlider.ev.on('rsAfterSlideChange', function() {
			_window.trigger('lazyload');
		});
				
		_window.trigger('lazyload');
		
	}
	
	
	
}

function moreDescription(){
	var collapsTextPart = jQuery('.collaps-text-part').outerHeight(true);
	var collapsTextContent = jQuery('.collaps-text-content').outerHeight(true);
	if(collapsTextContent > collapsTextPart){
		jQuery('.collaps-overlay').addClass('plus-show');
	}
}

function lazyloadInit(){//for lagyload images 		
	
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
										
	} 
	  
}

function tblScreen(){
	
	if(_tbl.length){		
		_tbl.height(_window.height());				
	}
	
}

function isMobile() {//for detect mobile browser
   var appsVersion = navigator.appVersion,
	   isAndroid = (/android/gi).test(appsVersion),
	   isIOS = (/iphone|ipad|ipod/gi).test(appsVersion);
   return (isAndroid || isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent));
}
