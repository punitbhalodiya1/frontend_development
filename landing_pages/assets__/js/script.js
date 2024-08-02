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
       
        jQuery(".btns-area, .btn-area-main").click(function() {
            var targetDiv = jQuery('.fifth-section-main');
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
        var phoneNum = phone.replace(/[^\d]/g, '');
        if(phoneNum.length < 10 || phoneNum.length > 10) {  
           $('#phone_err_msg').text("Please enter valid phone number");
            flag = 1; 
        }
    }

    var organization = $("#Organization").val();
    if (organization == "") {
        $('#organization_err_msg').text("Please enter organization name");
        flag = 1;
    }else{
        $('#organization_err_msg').text("");
        //flag = 0;
    }

    var title = $("#Title").val();
    if (title == "") {
        $('#title_err_msg').text("Please enter your title");
        flag = 1;
    }else{
        $('#title_err_msg').text("");
        //flag = 0;
    }

    if(flag == 1){
        return false;
    }else{
        return true;
    }
}

$(document).ready(function(){

    $('.registeredISV').on("click",function(){
        var forattr = $(this).attr('for');
        
        if(forattr == 'yes'){
            $(this).parent().parent().find('#yes').val('Yes');
            $(this).parent().parent().find('#no').val();
            $(this).parent().parent().find('#yes').attr('checked', true);
            $(this).parent().parent().find('#no').attr('checked', false);
        }else{
            $(this).parent().parent().find('#no').val('No');
            $(this).parent().parent().find('#yes').val();
            $(this).parent().parent().find('#no').attr('checked', true);
            $(this).parent().parent().find('#yes').attr('checked', false);
        }    
    });

    $('#google-sheet').on("submit",function(){
        $this = $(this);
        $this.find('button').prop('disabled',true);
        if(validateForm()){
            $.ajax({
                 type : "POST",
                 url : "https://script.google.com/macros/s/AKfycbzSWzZVwDz7xGjUtt8ydocdcwmr9IxO8Q_ow7Ea5WbEi8GxDfXZg27PK66qiGrCOKmdzw/exec",
                 data : $this.serialize(),
                 success: function(response) {
                        $('#final_msg').html("Thanks for Contacting us..! We Will Contact You Soon...").addClass('success').removeClass('error'); 
                        //$this.prop('disabled',false);
                        //$this.find('input:text, input:file, select, textarea').val(''); 
                        //$this.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
                        $this.find('input:text').val(''); 
                        //$this.find('input:radio').removeAttr('checked').removeAttr('selected');
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
});
