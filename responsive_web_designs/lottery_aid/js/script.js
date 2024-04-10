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

		/*var myFullpage = new fullpage('#site-content', {
	        menu: '#menu',
	        anchors: ['firstPage', 'secondPage', '3rdPage'],
	        sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
	        autoScrolling: false,
	        licenseKey: '1D6EB892-33B44755-A24C8D87-1115AC90'
	    });*/

	            /*$( "#mySlider" ).slider({
			      range: "max",
			      min: 2,
			      max: 8,
			      value: 2,
			      slide: function( event, ui ) {
			        $( "#total" ).val( ui.value );
			      }
			    });*/

		var handle = $( "#ticket-val" );
		var handle1 = $( "#custom-handle" );
		jQuery( "#slider" ).slider({
			range: "max",
		    min: 0,
		    max: 10,
		    value: 8,
		    change: function () {
		    	//handle1.append( "<strong>Hello</strong>" );
		    },
			create: function() {
				handle.text( jQuery( this ).slider( "value" ) + "0" );
				handle1.append( "<strong></strong>" );
				handle1.children('strong').text(jQuery( this ).slider( "value" ) + " Tickets" );

			},
			slide: function( event, ui ) {
				handle.text( ui.value + "0");
				handle1.children('strong').text(ui.value + " Tickets");
			}
		});

		jQuery(document).on('click', '.bottom-top-animation', function(e){
			e.preventDefault();
			//jQuery(window).scrollTop(0);
			jQuery("html, body").animate({scrollTop: 0},100);
		});

		var myFullpage = new fullpage('#site-content', {
			css3: true,
		    menu: '#menu',
		    anchors: ['firstPage', 'secondPage', '3rdPage'],
		  	sectionSelector: '.la-section',
			scrollingSpeed: 900,
			autoScrolling: false,
			easing: 'easeInOutCubic',
			easingcss3: 'ease',
			scrollOverflowReset: true,
			/*paddingTop: '0',*/
			licenseKey: '1D6EB892-33B44755-A24C8D87-1115AC90',
			fitToSection: false
		});

		jQuery('[data-bs-toggle=tooltip]').tooltip();

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
