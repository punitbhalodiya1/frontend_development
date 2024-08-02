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
       
        // jQuery(".third_register_now, .apply_to_be_speaker").click(function() {
        //     var targetDiv = jQuery('.first-section');
        //     //jQuery('.ts-sidebar-content ul li').removeClass('active');
        //     //jQuery(this).parent().addClass('active');
        //     jQuery('html, body').animate({
        //         scrollTop: jQuery(targetDiv).offset().top
        //     });
        // });

        // jQuery(".apply-for-invite").click(function() {
        //     var targetDiv = jQuery('.sixth-section');
        //     //jQuery('.ts-sidebar-content ul li').removeClass('active');
        //     //jQuery(this).parent().addClass('active');
        //     jQuery('html, body').animate({
        //         scrollTop: jQuery(targetDiv).offset().top
        //     });
        // });

        jQuery(".forth-click").click(function() {
            var targetDiv = jQuery('.first-section');
            //jQuery('.ts-sidebar-content ul li').removeClass('active');
            //jQuery(this).parent().addClass('active');
            jQuery('html, body').animate({
                scrollTop: jQuery(targetDiv).offset().top
            });
        });

        jQuery(".location-click").click(function() {
            var targetDiv = jQuery('.seventh-section');
            //jQuery('.ts-sidebar-content ul li').removeClass('active');
            //jQuery(this).parent().addClass('active');
            jQuery('html, body').animate({
                scrollTop: jQuery(targetDiv).offset().top
            });
        });
    });
});

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function validateForm() {
    var flag = 0;  

    var name = $("#Name").val();
    if (name == "") {
        $('#name_err_msg').text("Please enter your name");
        flag = 1;
    }else{
        $('#name_err_msg').text("");
        //flag = 0;
    }

    var role = $("#Role").val();
    if (role == "") {
        $('#role_err_msg').text("Please enter role");
        flag = 1;
    }else{
        $('#role_err_msg').text("");
        //flag = 0;
    }

    var org = $("#Organization").val();
    if (org == "") {
        $('#org_err_msg').text("Please enter organization");
        flag = 1;
    }else{
        $('#org_err_msg').text("");
        //flag = 0;
    }

    var email = $("#Email").val();
    if (email == "") {
        $('#email_err_msg').text("Please enter email ID");
        flag = 1;
    }else{
        if( !validateEmail(email)) {
            $('#email_err_msg').text("Please enter valid email ID");
            flag = 1;  
        }else{
            $('#email_err_msg').text("");
            //flag = 0;
        }
    }

    // var phone = $("#Phone").val();
    // if (phone == "") {
    //     $('#phone_err_msg').text("Please enter phone number");
    //     flag = 1;
    // }else{
    //     $('#phone_err_msg').text("");
    //     //flag = 0;
    //     var phoneNum = phone.replace(/[^\d]/g, '');
    //     if(phoneNum.length < 10 || phoneNum.length > 10) {  
    //        $('#phone_err_msg').text("Please enter valid phone number");
    //         flag = 1; 
    //     }
    // }

    if(flag == 1){
        return false;
    }else{
        return true;
    }
}

$(document).ready(function(){

    $('#WANotification').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    });

    $('#google-sheet').on("submit",function(){
        $this = $(this);
        $this.prop('disabled',true);
        if(validateForm()){
            $.ajax({
                 type : "POST",
                 url : "https://script.google.com/macros/s/AKfycbwUGf275MX2cw1kElZxVSf9ouB7jWFso8DnSZF6Iw9IjDRABwm3nj6SEjiQqe3jzlz0/exec",
                 data : $this.serialize(),
                 success: function(response) {
                        $('#final_msg').html("Thanks for Contacting us..! We Will Contact You Soon...").addClass('success').removeClass('error'); 
                        //$this.prop('disabled',false);
                        //$this.find('input:text, input:file, select, textarea').val(''); 
                        //$this.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
                        $this.find('input:text').val(''); 
                        //$this.find('input:radio').removeAttr('checked').removeAttr('selected');
                        setTimeout(function() {
                            window.location.href = "https://gupshupcommunica8.com/ar/thankyou.html";    
                        }, 2000);
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
