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

        jQuery(".btn-spacer").click(function() {
		    var targetDiv = jQuery('.what-next');
		    //jQuery('.ts-sidebar-content ul li').removeClass('active');
		    //jQuery(this).parent().addClass('active');
		    console.log(targetDiv);
		    jQuery('html, body').animate({
		        scrollTop: jQuery(targetDiv).offset().top
		    });
		});

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

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}

function validatePhone(txtPhone) {
    var a = txtPhone;
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}

function validateForm() {
    var flag = 0;  

    var name = $("#Name").val();
    if (name == "") {
        $('#name_err_msg').text("por favor, escriba su nombre");
        flag = 1;
    }else{
        $('#name_err_msg').text("");
        //flag = 0;
    }

    var email = $("#Email").val();
    if (email == "") {
        $('#email_err_msg').text("Dirección de correo electrónico");
        flag = 1;
    }else{
        if(IsEmail(email)==false){
            $('#email_err_msg').text("Por favor ingrese una dirección de correo electrónico válida");
            flag = 1;  
        }else{
            $('#email_err_msg').text("");
            //flag = 0;    
        }
        
    }

    var phone = $("#Phone").val();
    if (phone == "") {
        $('#phone_err_msg').text("Por favor ingrese el numero de telefono");
        flag = 1;
    }else{
        if(validatePhone(phone) ==false){
            $('#phone_err_msg').text("Ingrese un número de teléfono válido");
            flag = 1;
        }else{
            $('#phone_err_msg').text("");
            //flag = 0;    
        }
        
    }

    var country = $("#Country").val();
    if (country == "") {
        $('#con_err_msg').text("Por favor seleccione país");
        flag = 1;
    }else{
        $('#con_err_msg').text("");
        //flag = 0;
    }

    var industry = $("#Industry").val();
    if (industry == "") {
        $('#ind_err_msg').text("Por favor ingrese a la industria");
        flag = 1;
    }else{
        $('#ind_err_msg').text("");
        //flag = 0;
    }

    if(flag == 1){
        return false;
    }else{
        return true;
    }
}

$(document).ready(function(){

    $('.usecases_group').hide();

    $('#InterestedInUsecases').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
            $('.usecases_group').show();
        }else{
            $(this).val('No');
            $('.usecases_group').hide();
        }    
    })

    $('#Appointment').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    })

    $('#Deals').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    })

    $('#Feedback').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    })

    $('#Lead').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    })

    $('#Raffle').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    })

    $('#StoreLocator').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    })

    $('#PersonalizedCoupons').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    })
    

    $('#Others').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    })

    $('#google-sheet').on("submit",function(){
        
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '717676008755100');
        fbq('track', 'Lead');

        $this = $(this);
        $this.prop('disabled',true);
        if(validateForm()){
            $.ajax({
                 type : "POST",
                 url : "https://script.google.com/macros/s/AKfycbx6vC-NrOqrBsg8fszXgAMPzvOcQ9_ItaRrimKRD_q6jiNMLbdBw40Ul5ufne7fv1N-4w/exec",
                 data : $this.serialize(),
                 success: function(response) {
                        $('#final_msg').html("Gracias por contactarnos..! Nos pondremos en contacto con usted pronto...").addClass('success').removeClass('error'); 
                        $this.prop('disabled',false);
                        $this.find('input:text, input:file, select, textarea').val(''); 
                        $this.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
                    },
                 error: function(response){
                        $('#final_msg').html("Error: " + response).addClass('error').removeClass('success'); 
                        $this.prop('disabled',false);
                 }   
            });
        }else{
            $this.prop('disabled',false);
        }
        return false;
    });
});
