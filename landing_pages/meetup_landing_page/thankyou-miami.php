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
<meta name="color-scheme" content="light dark">
<meta name="supported-color-schemes" content="light dark">
<!-- Use this Tag to Make VML Scale -->
    <!--[if gte mso 9]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  <![endif]-->
<title>CONFIRMATION EMAIL Miami</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style type="text/css">
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

@media screen and (max-width: 660px) {
    
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
    .fullheight { height: auto !important; }

    .plr-15{padding-left: 15px !important;padding-right: 15px !important;}
    .plr-0{padding-left: 0px !important;padding-right: 0px !important;}
    .pl-0{padding-left: 0 !important;}

    .tbl-resp th span { font-size: 10px !important; }
    .tbl-resp td span { font-size: 9px !important; }
    .tbl-resp th,
    .tbl-resp td { padding: 5px !important; }

}
 
</style>
<!--[if mso]>
<style type="text/css">
body,table,td,p,span,a,h1,h2,h3,h4,h5,h6,strong,small,i,em,sub,sup,b,u,s,ul,li,ol{font-family: Arial, Helvetica, sans-serif !important;}
</style>
<![endif]-->
</head>

<body bgcolor="#f5f5f5" style="margin:0;padding:0;">
    <table width="100%" bgcolor="#f5f5f5" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;min-width:300px; font-size:16px;">
        <tr>
            <td align="center" valign="top" style="padding: 0;">
                <table width="600" align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" class="container-table" style="width:600px;margin:0 auto;">
                    <tr>
                        <td>
                            <a target="_blank" href="https://www.gupshup.io/">
                                <img src="http://54.163.12.14/portfolio/email_templates/meetup/miami/images/confirmation-banner.png" width="600" alt="confirmation-banner.png" style="width:100%;height:auto;max-width:100%;display:block;">
                            </a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="padding: 40px 60px 0;" class="plr-15">

                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 0;">
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="padding-bottom: 15px;">
                                                    <p style="font-size:25px;line-height:1.333;font-weight:700;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">It\'s a done deal!</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 15px;">
                                                    <p style="font-size:13px;line-height:1.333;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">You are one of a select few individuals chosen to access Miami Meetup 2022.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 15px;">
                                                    <p style="font-size:18px;line-height:1.333;font-weight:700;font-family: \'Poppins\', sans-serif;color:#5E34F1;margin:0;padding:0;">Just show this confirmation at registration desk.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 15px;">
                                                    <p style="font-size:13px;line-height:1.333;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"><span style="font-weight: 700;">Venue:</span> BUILDING.co, Miami</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 37px;">
                                                    <p style="font-size:13px;line-height:1.333;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"><span style="font-weight: 700;">Date & Time:</span> 17th Nov 2022. 16:00 Onwards</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 15px;">
                                                    <p style="font-size:13px;line-height:1.333;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"><span style="font-weight: 700;">Here is how the day will unfold:</span></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 0 60px 40px 60px;" class="plr-15">

                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 0;">
                                        <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center" style="padding-bottom: 35px;" class="tbl-resp">
                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse: initial !important;">
                                                        <tr>
                                                            <th width="75" align="left" bgcolor="#FF5C71" style="padding: 7px 12px; border-radius: 10px 0px 0px 0px;">
                                                                <span style="font-size:12px;line-height:1.818;font-weight:600;font-family: \'Poppins\', sans-serif;color:#ffffff;margin:0;padding:0;">Time</span>
                                                            </th>
                                                            <th width="207" align="left" bgcolor="#FF5C71" style="padding: 7px 12px; border-radius: 0px;">
                                                                <span style="font-size:12px;line-height:1.818;font-weight:600;font-family: \'Poppins\', sans-serif;color:#ffffff;margin:0;padding:0;">Sessions</span>
                                                            </th>
                                                            <th width="60" align="left" bgcolor="#FF5C71" style="padding: 7px 12px; border-radius: 0px;">
                                                                <span style="font-size:12px;line-height:1.818;font-weight:600;font-family: \'Poppins\', sans-serif;color:#ffffff;margin:0;padding:0;">Speaker</span>
                                                            </th>
                                                            <th width="140" align="left" bgcolor="#FF5C71" style="padding: 7px 12px; border-radius: 0px 10px 0px 0px;">
                                                                <span style="font-size:12px;line-height:1.818;font-weight:600;font-family: \'Poppins\', sans-serif;color:#ffffff;margin:0;padding:0;">Designation</span>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">16:00</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Gates Open for Meetup</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">-</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">16:30</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">WhatsApp business messaging overview</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Irma Montenegro</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Manager - Business development, Gupshup</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">16:45</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">What is Gupshup, the QBM opportunity</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Anindita Guha</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Sr Director - Growth, Gupshup</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">17:15</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Meta session</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">TBD</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">TBD</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">18:00</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Gupshup self-serve platform and partner portal</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Irma Montenegro</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Manager - Business development, Gupshup</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">18:15</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Open QnA- Gupshup Panel</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Anindita Guha<br>Irma Montenegro</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Sr Director - Growth, Gupshup<br>Manager - Business development, Gupshup</span>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px 0px 0px 10px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">18:30</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Cocktail & networking</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"></span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px 0px 10px 0px; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"></span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 25px;">
                                                    <p style="font-size:13px;line-height:1.333;font-weight:500;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Best,<br><strong style="font-weight: 700;">Team Gupshup</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 0;">
                                                    <a target="_blank" href="https://www.gupshup.io/">
                                                        <img src="http://54.163.12.14/portfolio/email_templates/meetup/miami/images/logo-footer.png" width="113" alt="logo-footer.png" style="height:auto;max-width:100%;display:inline-block;">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
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
        $email->setSubject("Thank you for registering");
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
<html lang="es">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T4NBX2D');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="AgTyrH-FoK0wMc_2muF7uoyGI6TtrPWYPx0CJN1N3gY">
    <meta name="description" content="Business Messaging on WhatsApp">
    <meta name="keywords" content="Business Messaging on WhatsApp">
    <meta name="author" content="Gupshup">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for registering</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />
    <style>
        html, body{min-height: 100vh;display: flex;flex-direction: column;}
        section.section-copyright{margin-top: auto;}
        .first-section .inner-box{margin: 13.4% 0;}
        .first-section{padding-top: 0;padding-bottom: 0;}
        .first-section{text-align: center;}
        .first-section h1{text-align: center;}
        @media (max-width: 767px){
            .first-section{
                padding: 30px 0px;
                background-position: unset;
            }
            .first-section .inner-box{
                margin: 23.4% 0;
                top: 146px;
            }
        }
    </style>
    
    <!-- Meta Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '667642131445031');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=667642131445031&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4NBX2D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- First section -->
    <section  class="first-section">
        <div class="container">
            <div class="inner-box">
                <div class="first-logo">
                    <img src="images/logo-1.svg" alt="logo" />
                </div>
                <h1 class="landing-heading">Thank you for registering.</h1>
                <div class="date-time">Please check your inbox for invite mail.</div>

                <!-- <div class="banner-btn">
                    <a href="javascript:;" class="btn-com" id='authorize-button' onclick='handleAuthClick();'>Add event to your calender</a>
                </div> -->
            </div>
        </div>
    </section>

    <section class="section-copyright">
            <div class="container">
                <div class="copyright-text">Copyright 2022</div>
                <a href="https://www.gupshup.io/" target="_blank"><img src="images/white-gupshup.png" alt="img" /></a>
            </div>
    </section>
    
    <!-- <section class="section-bottom">
            <div class="container">
                <a href="https://gupshupcommunica8.com/privacy-policy.html" target="_blank">Privacy Policy</a>
                <a href="https://gupshupcommunica8.com/terms-of-service.html" target="_blank">Terms of Service</a>
            </div>
    </section> -->

    
</body>
</html>