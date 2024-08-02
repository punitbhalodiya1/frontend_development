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

function validateForm() {
    var flag = 0;  

    var name = $("#Name").val();
    if (name == "") {
        $('#name_err_msg').text("Please enter your name");
        flag = 1;
    }else{
        $('#name_err_msg').text("");
        flag = 0;
    }

    var email = $("#Email").val();
    if (email == "") {
        $('#email_err_msg').text("Please email address");
        flag = 1;
    }else{
        $('#email_err_msg').text("");
        flag = 0;
    }

    var phone = $("#Phone").val();
    if (phone == "") {
        $('#phone_err_msg').text("Please enter phone number");
        flag = 1;
    }else{
        $('#phone_err_msg').text("");
        flag = 0;
    }

    var country = $("#Country").val();
    if (country == "") {
        $('#con_err_msg').text("Please select country");
        flag = 1;
    }else{
        $('#con_err_msg').text("");
        flag = 0;
    }

    var industry = $("#Industry").val();
    if (industry == "") {
        $('#ind_err_msg').text("Please enter industry");
        flag = 1;
    }else{
        $('#ind_err_msg').text("");
        flag = 0;
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

    $('#Others').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    })

    $('#google-sheet').on("submit",function(){
        $this = $(this);
        $this.prop('disabled',true);
        if(validateForm()){
            $.ajax({
                 type : "POST",
                 url : "https://script.google.com/macros/s/AKfycbx6vC-NrOqrBsg8fszXgAMPzvOcQ9_ItaRrimKRD_q6jiNMLbdBw40Ul5ufne7fv1N-4w/exec",
                 data : $this.serialize(),
                 success: function(response) {
                        $('#final_msg').html("Thanks for Contacting us..! We Will Contact You Soon...").addClass('success').removeClass('error'); 
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
