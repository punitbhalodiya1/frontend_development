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

        jQuery(".banner-btn-count").click(function() {
            var targetDiv = jQuery('.fifth-section');
            //jQuery('.ts-sidebar-content ul li').removeClass('active');
            //jQuery(this).parent().addClass('active');
            jQuery('html, body').animate({
                scrollTop: jQuery(targetDiv).offset().top
            });
        });

        jQuery(".location").click(function() {
            var targetDiv = jQuery('.sixth-section');
            //jQuery('.ts-sidebar-content ul li').removeClass('active');
            //jQuery(this).parent().addClass('active');
            jQuery('html, body').animate({
                scrollTop: jQuery(targetDiv).offset().top
            });
        });
        

        // jQuery(".location").click(function() {
        //     var targetDiv = jQuery('.location-section');
        //     //jQuery('.ts-sidebar-content ul li').removeClass('active');
        //     //jQuery(this).parent().addClass('active');
        //     jQuery('html, body').animate({
        //         scrollTop: jQuery(targetDiv).offset().top
        //     });
        // });

        // jQuery(".location-click").click(function() {
        //     var targetDiv = jQuery('.seventh-section');
        //     //jQuery('.ts-sidebar-content ul li').removeClass('active');
        //     //jQuery(this).parent().addClass('active');
        //     jQuery('html, body').animate({
        //         scrollTop: jQuery(targetDiv).offset().top
        //     });
        // });
        

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

    var phone = $("#Phone").val();
    if (phone == "") {
        $('#phone_err_msg').text("Please enter phone number");
        flag = 1;
    }else{
        $('#phone_err_msg').text("");
        //flag = 0;
        // var phoneNum = phone.replace(/[^\d]/g, '');
        // if(phoneNum.length < 8 || phoneNum.length > 13) {  
        //    $('#phone_err_msg').text("Please enter valid phone number");
        //     flag = 1; 
        // }
    }

    var organization = $("#Organization").val();
    if (organization == "") {
        $('#organization_err_msg').text("Please enter organization name");
        flag = 1;
    }else{
        $('#organization_err_msg').text("");
        //flag = 0;
    }

    var role = $("#Role").val();
    if (role == "") {
        $('#role_err_msg').text("Please enter your role");
        flag = 1;
    }else{
        $('#role_err_msg').text("");
        //flag = 0;
    }

    if(flag == 1){
        return false;
    }else{
        return true;
    }
}

function validateFormTop() {
    var flag = 0;  

    var name = $("#tpName").val();
    if (name == "") {
        $('#tpname_err_msg').text("Please enter your name");
        flag = 1;
    }else{
        $('#tpname_err_msg').text("");
        //flag = 0;
    }

    var email = $("#tpEmail").val();
    if (email == "") {
        $('#tpemail_err_msg').text("Please enter email ID");
        flag = 1;
    }else{
        if( !validateEmail(email)) {
            $('#tpemail_err_msg').text("Please enter valid email ID");
            flag = 1;  
        }else{
            $('#tpemail_err_msg').text("");
            //flag = 0;
        }
    }

    var phone = $("#tpPhone").val();
    if (phone == "") {
        $('#tpphone_err_msg').text("Please enter phone number");
        flag = 1;
    }else{
        $('#tpphone_err_msg').text("");
        //flag = 0;
        // var phoneNum = phone.replace(/[^\d]/g, '');
        // if(phoneNum.length < 8 || phoneNum.length > 13) {  
        //    $('#tpphone_err_msg').text("Please enter valid phone number");
        //     flag = 1; 
        // }
    }

    var organization = $("#tpOrganization").val();
    if (organization == "") {
        $('#tporganization_err_msg').text("Please enter organization name");
        flag = 1;
    }else{
        $('#tporganization_err_msg').text("");
        //flag = 0;
    }

    var role = $("#tpRole").val();
    if (role == "") {
        $('#tprole_err_msg').text("Please enter your role");
        flag = 1;
    }else{
        $('#tprole_err_msg').text("");
        //flag = 0;
    }

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
            $(this).prop('checked',true);
        }else{
            $(this).val('No');
            $(this).prop('checked',false);
        }    
    });

    $('#tpWANotification').on("click",function(){
        if($(this).is(":checked")){
            $(this).val('Yes');
        }else{
            $(this).val('No');
        }    
    });
    

    $('#google-sheet').on("submit",function(){
        $this = $(this);
        $this.find('button').prop('disabled',true);
        if(validateForm()){
            $.ajax({
                 type : "POST",
                 url : "https://script.google.com/macros/s/AKfycbw47IRHtjNS2BKWprKWid75UPF9KeXCOvO68wcARQ8_d1yKieKw6lFK_NFuR43g-GCprA/exec",
                 data : $this.serialize(),
                 success: function(response) {
                        $('#final_msg').html("Thanks for Contacting us..! We Will Contact You Soon...").addClass('success').removeClass('error'); 
                        
                        $('#capture-inquiry').find('input[name="Email"]').val($this.find('#Email').val());
                        var chkemail = $('#capture-inquiry').find('input[name="Email"]').val();
                        
                        if( chkemail != '' ){
                            $('#capture-inquiry').submit();
                        }

                        // $this.find('input:text').val(''); 
                       
                        // setTimeout(function() {
                        //     window.location.href = "https://gupshupcommunica8.com/meetup_landing_page/thankyou.html";    
                        // }, 2000);
                        $this.find('button').prop('disabled',false);
                    },
                 error: function(response){
                        $('#final_msg').html("Error: " + response).addClass('error').removeClass('success'); 
                        $this.find('button').prop('disabled',false);
                 }   
            });
        }else{
            $this.find('button').prop('disabled',false);
        }
        return false;
    });

    $('#google-sheet-top').on("submit",function(){
        $this = $(this);
        $this.find('button').prop('disabled',true);
        if(validateFormTop()){
            $.ajax({
                 type : "POST",
                 url : "https://script.google.com/macros/s/AKfycbw47IRHtjNS2BKWprKWid75UPF9KeXCOvO68wcARQ8_d1yKieKw6lFK_NFuR43g-GCprA/exec",
                 data : $this.serialize(),
                 success: function(response) {
                        $('#refinal_msg').html("Thanks for Contacting us..! We Will Contact You Soon...").addClass('success').removeClass('error'); 
                        
                        $('#capture-inquiry').find('input[name="Email"]').val($this.find('#tpEmail').val());
                        var chkemail = $('#capture-inquiry').find('input[name="Email"]').val();
                        
                        if( chkemail != '' ){
                            $('#capture-inquiry').submit();
                        }
                        
                        // $this.find('input:text').val(''); 
                        
                        // setTimeout(function() {
                        //     window.location.href = "https://gupshupcommunica8.com/meetup_landing_page/thankyou.html";    
                        // }, 2000);
                        $this.find('button').prop('disabled',false);
                    },
                 error: function(response){
                        $('#refinal_msg').html("Error: " + response).addClass('error').removeClass('success'); 
                        $this.find('button').prop('disabled',false);
                 }   
            });
        }else{
            $this.find('button').prop('disabled',false);
        }
        return false;
    });
});
