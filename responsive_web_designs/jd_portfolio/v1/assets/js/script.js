var _body = "",
    _html = "",
    _htmlBody = "",
    _window = "",
    _layout = "",
    _lazyload = "";

function myFunction() {
    var element = document.getElementById("myDIV");
    element.classList.toggle("mystyle");
}
        
jQuery(window).on('load', function () {
    jQuery.ready.then(function () {
        "use strict";

        _body = jQuery('body');
        _html = jQuery('html');
        _htmlBody = jQuery('html, body');
        _window = jQuery(window);
        _layout = jQuery('.layout');

        // default script
        _html.addClass('window-loaded');

        jQuery(".down-arrow").click(function () {
            var targetDiv = jQuery('#services');
            jQuery('html, body').animate({
                scrollTop: jQuery(targetDiv).offset().top
            });
        });

        jQuery(".about-btn").click(function () {
            var targetDiv = jQuery('#about');
            jQuery('html, body').animate({
                scrollTop: jQuery(targetDiv).offset().top
            });
        });

        jQuery('.tab-a').click(function () {
            jQuery(".tab").removeClass('tab-active');
            jQuery(".tab[data-id='" + $(this).attr('data-id') + "']").addClass("tab-active");
            jQuery(".tab-a").removeClass('active-a');
            jQuery(this).parent().find(".tab-a").addClass('active-a');
        });
    });
});


