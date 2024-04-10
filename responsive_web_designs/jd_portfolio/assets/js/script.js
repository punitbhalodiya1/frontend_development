/*!-----------------------------------------------------------------
    Name: Aegon - Personal Portfolio HTML Template
    Version: 1.0
    Author: Nextrising Tech
    Website: https://www.nextrisingtech.com/
    Support: nextrisingtech@gmail.com
    License: You must have a valid license purchased only from ThemeForest in order to legally use the theme for your project.
    Copyright 2022.
-------------------------------------------------------------------*/
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

        // default script
        _html.addClass('window-loaded');
       
        jQuery(".down-arrow").click(function() {
            var targetDiv = jQuery('#services');
            jQuery('html, body').animate({
                scrollTop: jQuery(targetDiv).offset().top
            });
        });

        jQuery(".about-btn").click(function() {
            var targetDiv = jQuery('#about');
            jQuery('html, body').animate({
                scrollTop: jQuery(targetDiv).offset().top
            });
        });
            

    });
});
