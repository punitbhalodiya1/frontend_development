<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST)){

    if(isset($_POST['Email']) && !empty($_POST['Email'])){
       
        $message = '<!doctype html>
        <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Use this Tag to Make VML Scale -->
            <!--[if gte mso 9]>
            <xml>
              <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
              </o:OfficeDocumentSettings>
            </xml>
          <![endif]-->
        <title></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <style type="text/css">
        /*font-family: \'Poppins\', sans-serif;*/
        #outlook a {
            padding: 0;
        }
        body, table, td, a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        table, td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        img {
            -ms-interpolation-mode: bicubic;
        }
        body {
            margin: 0;
            padding: 0;
        }
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }
        img[src*="c_pixel"] {width:0px;height:0px;display:block;}
        table {
            border-collapse: collapse !important;
        }

        @media screen and (max-width: 620px) {
            
            .container-table {
                width: 100% !important;     
            }
            .column {
                width: 100% !important;
                table-layout: fixed !important;
                display: block !important;
                padding-right: 0px !important;
                padding-left: 0px !important;
                margin-bottom: 0.625em;
            }
            .column-half{
                width: 50% !important;
                table-layout: fixed !important;       
                padding-right: 0px !important;
                padding-left: 0px !important;
                margin-bottom: 0.625em;
            }
            .column-text-center {
                width: 100% !important;
                table-layout: fixed !important;
                display: block !important;
                padding-right: 0px !important;
                padding-left: 0px !important;
                margin-bottom: 0.625em;
                text-align: center !important;
            }
            .fullheight {height: auto !important;}

            .plr-0{padding-left: 0px !important;padding-right: 0px !important;}
            .plr-15{padding-left: 15px !important;padding-right: 15px !important;}
            .pl-0{padding-left: 0 !important;}
            .w10{width: 10px !important;}
            .caption-title-box{padding: 15px 20px !important;}
            .top-pd-cell{padding-top: 40px !important;}

            .cell-small-size{width: 10% !important;}
            .mo-hide{display: none !important;}

        }
         
        </style>
        <!--[if mso]>
        <style type="text/css">
        body,table,td,p,span,a,h1,h2,h3,h4,h5,h6,strong,small,i,em,sub,sup,b,u,s,ul,li,ol{font-family: Arial, Helvetica, sans-serif !important;}
        </style>
        <![endif]-->
        </head>

        <body bgcolor="#ffffff" style="margin:0;padding:0;">

                <table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;min-width:300px; font-size:16px;">
                    <tr>
                        <td align="center" valign="top" style="padding: 0;">
                        
                            <table width="600" align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" class="container-table" style="width:600px;margin:0 auto;">
                                <tr>
                                    <td bgcolor="#edecfc" style="padding: 0;">

                                        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td background="http://54.163.12.14/portfolio/email_templates/thankyou/images/main-bg.jpg" bgcolor="#edecfc" width="100%" height="314" valign="top" style="width:100%; background-repeat:no-repeat; background-color:#edecfc;background-size:cover; background-position:center center;">
                                                <!--[if gte mso 9]>
                                                <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:640px;height:314px;">
                                                <v:fill type="frame" src="http://54.163.12.14/portfolio/email_templates/thankyou/images/main-bg.jpg" color="#edecfc" />
                                                <v:textbox inset="0,0,0,0">
                                                <![endif]-->
                                                <div>
                                                    <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td align="left" style="padding:26px 0 10px 0;" class="">
                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td align="center" style="padding: 0 40px;" class="plr-15">
                                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                                <tr>
                                                                                    <td align="center" style="padding-bottom: 10px;">
                                                                                        <a target="_blank" href="https://www.gupshup.io/" style="width:auto;height:auto;max-width:100%;display:inline-block;">
                                                                                            <img src="http://54.163.12.14/portfolio/email_templates/thankyou/images/gupshup-logo.png" width="163" alt="gupshup-logo.png" style="display:block;height:auto;border:none;max-width:100%;">
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" style="padding-bottom: 10px;">
                                                                                        <a target="_blank" href="#" style="width:auto;height:auto;max-width:100%;display:inline-block;">
                                                                                            <img src="http://54.163.12.14/portfolio/email_templates/thankyou/images/obrigado-text.png" width="222" alt="obrigado-text.png" style="display:block;height:auto;border:none;max-width:100%;">
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" style="padding: 0 80px 15px 80px;" class="plr-0">
                                                                                        <p style="font-size:11px;line-height:1.667;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0; text-align: center;">Recebemos sua inscrição para o Gupshup Brazil Meetup. Será um prazer ter você na família Gupshup.</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" style="padding-bottom: 15px;">
                                                                                        <a target="_blank" href="https://gupshupcommunica8.com/ptm/" style="width:auto;height:auto;max-width:100%;display:inline-block;">
                                                                                            <img src="http://54.163.12.14/portfolio/email_templates/thankyou/images/btn-new.png" width="75" alt="btn-know-more.png" style="display:block;height:auto;border:none;max-width:100%;">
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" style="padding-bottom: 10px;">
                                                                                        <p style="font-size:11px;line-height:1.667;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0; text-align: center;">Tenha um ótimo dia e mais uma vez, obrigado!
        </p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" style="padding-bottom: 10px;">
                                                                                        <p style="font-size:11px;line-height:1.667;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0; text-align: center;">Cordialmente,<br><strong style="font-weight:700;">Equipe Gupshup</strong></p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" style="padding-bottom: 0;">
                                                                                        <p style="font-size:11px;line-height:1.667;font-weight:500;font-family: \'Poppins\', sans-serif;color:#FF3964;margin:0;padding:0; text-align: center;"><a target="_blank" href="#" style="display:inline-block; text-decoration: none;color:#FF3964;"><span style="display:inline-block; text-decoration: none;color:#FF3964;">www.gupshup.io</span></a></p>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--[if gte mso 9]>
                                                </v:textbox>
                                                </v:rect>
                                                <![endif]-->
                                                </td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>
                                
                            </table>
                            
                        </td>
                    </tr>
                </table>
            </body>
        </html>';

        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("noreply@gupshupcommunica8.com", "Gupshup");
        $email->setSubject("Obrigado por se cadastrar!");
        $email->addTo($_POST['Email']);
        //$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
        $email->addContent(
            "text/html", $message
        );
        $sendgrid = new \SendGrid(SENDGRID_API_KEY);
        try {
            $response = $sendgrid->send($email);
            //print $response->statusCode() . "\n";
            //print_r($response->headers());
            //print $response->body() . "\n";
        } catch (Exception $e) {
            //echo 'Caught exception: '. $e->getMessage() ."\n";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="AgTyrH-FoK0wMc_2muF7uoyGI6TtrPWYPx0CJN1N3gY">
    <meta name="description" content="Communica8 India 2022">
    <meta name="keywords" content="Communica8 India 2022">
    <meta name="author" content="Gupshup">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Gupshup</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />
    <style>
        html, body{min-height: 100vh;display: flex;flex-direction: column;}
        section.section-copyright{margin-top: auto;}
        .first-section .inner-box{margin: 10% 0;}
        @media (max-width: 767px){
            .first-section{
                padding: 30px 0px;
                background-position: unset;
            }
            .first-section .inner-box{
                margin: 23.7% 0;
                top: 146px;
            }
        }
    </style>
    
</head>
<body>

    <!-- First section -->
    <section  class="first-section">
        <div class="container">
            <div class="inner-box">
                <div class="first-logo">
                    <img src="images/logo.png" alt="logo" />
                </div>
                <h1 class="landing-heading">Obrigado por se cadastrar!</h1>
                <div class="date-time">Entraremos em contato em breve...</div>
            </div>
        </div>
    </section>

    <section class="section-copyright">
            <div class="container">
                <div class="copyright-text">Gupshup ©2022. All right reserved.</div>
            </div>
    </section>
    
    <!-- <script>
        //var clientId = '1046778703171-n6aqfqpbelr28goer46jmatt0dgk0d3m.apps.googleusercontent.com';
        var clientId = '57596860253-ctiv244fmpqlqs5al96kmpa9suvbfupv.apps.googleusercontent.com';
        //secret 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
        
        //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
        var apiKey = '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';
        var scopes = 'https://www.googleapis.com/auth/calendar';

        function handleClientLoad() {
          gapi.client.setApiKey(apiKey);
          window.setTimeout(checkAuth,1);
          checkAuth();
        }

        function checkAuth() {
          gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: true},
              handleAuthResult);
        }

        function handleAuthResult(authResult) {
          var authorizeButton = document.getElementById('authorize-button');
          if (authResult) {
            authorizeButton.style.visibility = 'hidden';
            makeApiCall();
          } else {
            authorizeButton.style.visibility = '';
            authorizeButton.onclick = handleAuthClick;
           }
        }

        function handleAuthClick(event) {
          gapi.auth.authorize(
              {client_id: clientId, scope: scopes, immediate: false},
              handleAuthResult);
          return false;
        }

        function makeApiCall() {
          gapi.client.load('calendar', 'v3', function() {

            var resource = {
              "summary": "Communica8 2022 - Conversation about conversations",
              "location": "Mumbai, India",
              "start": {
                "dateTime": "2022-06-30T10:00:00.000-07:00"
              },
              "end": {
                "dateTime": "2011-06-30T10:25:00.000-07:00"
              }
            };
            var request = gapi.client.calendar.events.insert({
              'calendarId': 'primary',
              'resource': resource
            });
            request.execute(function(resp) {
              console.log(resp);
            });
          });
        }
    </script>
    <script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script> -->
    <!-- <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script> -->
</body>
</html>