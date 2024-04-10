// JavaScript Document

$(document).ready(function(e) {
   
    handleBrowser();
    
    $('.hamburger').on('click',function(){
      var _this = $(this);
      var _thisTarget = _this.parents().find('.navigation_item');
      if(_this.hasClass('active')){
        _this.removeClass('active');
        _thisTarget.removeClass('open');
      }else{
        _this.addClass('active');
        _thisTarget.addClass('open');
      }
    })


    $('.hasSubmenu').on('click',function(){
      var _this = $(this);      
      _this.addClass('active');
      var hasSubmenu = _this.parents('.sub_menu').length+1;
      $(_this).parent('li').addClass('active');
      $('.navigation_item').attr('data-step',hasSubmenu);
    });

    $('.back_button').on('click',function(){
      var _this = $(this);      
      _this.addClass('active');
      var getStep = $('.navigation_item').attr('data-step');
      $('.navigation_item').attr('data-step',(Number(getStep)-1));
      $(_this).parent('.title_submenu').parent('.sub_menu').parent('li').removeClass('active');
    })


    $('.search_submit').on('click',function(){
        $('.header_section').addClass('search-open');
        $('.header_search').focus()
    })


    $(document).on('click',function(e){
      if(!$(e.target).is('.search_Form , .search_Form *, .header_form , .header_form *')){
        if($('.header_section').hasClass('search-open')){
          $('.header_section').removeClass('search-open');
        }
      }
      if(!$(e.target).is('.hamburger, .hamburger  *, .navigation_item, .navigation_item *')){
        if($('.navigation_item').hasClass('open')){
          $('.navigation_item').removeClass('open');
          $('.hamburger').removeClass('active');
          $('.navigation_item').attr('data-step','0')
          $('.navigation_item').find('li').removeClass('active');
        }
      }
    })

    if($('.sliderHome').length){
      $('.sliderHome').slick({
        dots: true,
        arrows: true,
        adaptiveHeight: true
      });
    }
    

});


function handleBrowser(){//for handle ie browser
	var appVersion = navigator.appVersion, root = $('html');
	var clas= $('p.class')
	if(appVersion.indexOf("MSIE 6.") !== -1){root.addClass('ie ltie11 ltie10 ltie9 ltie8 ltie7 ie6'); clas.text('Browser is ie6'); } 
	if(appVersion.indexOf("MSIE 7.") !== -1){root.addClass('ie ltie11 ltie10 ltie9 ltie8 ie7'); clas.text('Browser is ie7'); } 
	if(appVersion.indexOf("MSIE 8.") !== -1){root.addClass('ie ltie11 ltie10 ltie9 ie8'); clas.text('Browser is ie8');} else
	if(appVersion.indexOf("MSIE 9.") !== -1){root.addClass('ie ltie11 ltie10 ie9'); clas.text('Browser is ie9');} else
	if(appVersion.indexOf("MSIE 10.")!== -1){root.addClass('ie ltie11 ie10'); clas.text('Browser is ie10');} else
	if(appVersion.indexOf("MSIE 11.")!== -1){root.addClass('ie ie11'); clas.text('Browser is ie11');}
}