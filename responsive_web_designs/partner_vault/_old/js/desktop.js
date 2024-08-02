var _body = "",
	_html = "",
	_htmlBody = "",
	_window = "",
	_layout = "",
	ani4Busy = false,
	rootOverflow = 0;
	

jQuery( document ).ready(function($) {
	"use strict";

	_body = jQuery('body');
	_html = jQuery('html');
	_htmlBody = jQuery('html, body');
	_window = jQuery(window);
	_layout = jQuery('.layout');

	// for handle mobile nav
	jQuery('.nav-toggle-btn').on('click', function(e) {
		e.preventDefault();
		_html.toggleClass('nav-expanded');
	});

	const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
	const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => {
	    // Create a new tooltip instance and pass the custom class as an option
	    return new bootstrap.Tooltip(tooltipTriggerEl, {
	        customClass: 'gp-tooltip-a' // Replace 'your-custom-class' with your desired class name
	    });
	});


	// default script
	jQuery('#icon_vgfx').load(THEME_URL+'images/vgfx.svg');


    //page change
	jQuery(document).on('click', '.cc-main-page-change, .cc-sub-page-change', function(e) {
		
		e.preventDefault();
		
		var linkObj = jQuery(this);
		var newPageID = linkObj.attr('data-href');
		var ajax_url = linkObj.attr('data-ajax-href');
		var reload_page = linkObj.attr('data-reload');
		var existingHTML = jQuery.trim(jQuery("#gp-"+newPageID).html());
		var mainPage = linkObj.hasClass('cc-main-page-change') ? true : false;
		
        var formData = {};
        if(newPageID == "get-packs" && jQuery('#pack_type').length > 0)  {
            formData = { pack_type : jQuery('#pack_type').val() };
            jQuery('#pack_type').remove();
        }

		if(reload_page != "always" && reload_page != "yes" && (typeof(ajax_url) == "undefined" || existingHTML != ""))  {
			page_change(newPageID, mainPage);
		}
		else	{
			_html.addClass('loading');
			cc_ajax(ajax_url, formData, function(data) {
				_html.removeClass('loading');
				page_change(newPageID, mainPage);

				if(reload_page != "always" && reload_page == "yes")
					linkObj.attr('data-reload', 'no');
			});
		}
  	});

	


});



function page_change(selector, mainPage)  {
	
	// var title = selector;
	// history.pushState({path: selector, mainPage: mainPage, is_mobile: false}, title, SITE_URL+'/dashboard' + (selector != "dashboard" ? "/"+selector : ""));
	
	page_change_html(selector, mainPage);
}

function page_change_html(selector, mainPage)  {
	
    var newPageID = "#gp-"+selector;
	// reset_page(selector);

	// cc_trackEvent();

	
	if(mainPage)  {
		jQuery(".gp_page").removeClass('active');
		jQuery(newPageID).addClass('active');

		jQuery(".gp-sidebar ul.nav-menu a").removeClass('active');
		jQuery(".gp-sidebar ul.nav-menu a[data-href='"+selector+"']").addClass('active');

	}	else	{

		var parent_page = jQuery("#gp-"+selector+"-tab").parents('.gp_page:first');

		if(!parent_page.hasClass('active')) {
			
			jQuery(".gp_page").removeClass('active');
			parent_page.addClass('active');
			
			var parent_page_id = parent_page.attr('id').replace("gp-", "");
			
			jQuery(".gp-sidebar ul.nav-menu a").removeClass('active');
			jQuery(".gp-sidebar ul.nav-menu a[data-href='"+parent_page_id+"']").addClass('active');
		}

		jQuery("#gp-"+selector+"-tab").parents('ul.nav:first').find("button, a").removeClass('active');
		jQuery("#gp-"+selector+"-tab").trigger('click');
		jQuery("#gp-"+selector+"-tab").siblings('.cc-sub-page-change').addClass('active');
	}
    
    
    //detail page
    _html.removeClass('gp-show-detail');
    jQuery('.gp-detail-page').removeClass('show');

	_htmlBody.stop(true, true).animate({ scrollTop: 0 }, 0);
    // _window.scrollTop(0);
    setTimeout(function() {
        _window.trigger('lazyload');
    }, 10);

}


function numberWithDots(n) {
    var parts=n.toString().split(".");
    return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}