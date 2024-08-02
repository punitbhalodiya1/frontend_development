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
       
        $message = '
<!doctype html>
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
<title></title>
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
                <table width="600" align="center" bgcolor="#FBF0D5" border="0" cellpadding="0" cellspacing="0" class="container-table" style="width:600px;margin:0 auto;">
                    <tr>
                        <td>
                            <a target="_blank" href="https://www.gupshup.io/">
                                <img src="http://54.163.12.14/portfolio/email_templates/meetup/mexico/images/confirmation-banner.png" width="600" alt="" style="width:100%;height:auto;max-width:100%;display:block;">
                            </a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="padding: 20px 60px 0;" class="plr-15">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 0;">
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="padding-bottom: 15px;" align="center">
                                                    <p style="font-size:25px;line-height:1.333;font-weight:700;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">¡Es un hecho!</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 15px;" align="center">
                                                    <p style="font-size:13px;line-height:1.333;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Eres uno de los pocos elegidos para acceder a Communica8 México 2022. El mayor evento de comercio conversacional de México.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 15px;" align="center">
                                                    <p style="font-size:19px;line-height:1.333;font-weight:700;font-family: \'Poppins\', sans-serif;color:#5E34F1;margin:0;padding:0;">Sólo tienes que mostrar esta confirmación en el punto de registro</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 15px;" align="center">
                                                    <p style="font-size:13px;line-height:1.333;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"><span style="font-weight: 700;">Evento:</span> Presidente InterContinental, Ciudad de México</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 36px;" align="center">
                                                    <p style="font-size:13px;line-height:1.333;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"><span style="font-weight: 700;">Fecha y hora:</span> 10 de noviembre de 2022. 15:00 en adelante</p>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="padding-bottom: 15px;" align="center">
                                                    <p style="font-size:13px;line-height:1.333;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"><span style="font-weight: 700;">Así es como se desarrollará el día:</span></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 0 60px;" class="plr-15">

                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 0;">
                                        <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center" style="padding-bottom: 43px;" class="tbl-resp">
                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse: initial !important;">
                                                        <tr>
                                                            <th width="75" align="left" bgcolor="#FBAA19" style="padding: 7px 12px; border-radius: 10px 0px 0px 0px;">
                                                                <span style="font-size:12px;line-height:1.818;font-weight:600;font-family: \'Poppins\', sans-serif;color:#ffffff;margin:0;padding:0;">Hora</span>
                                                            </th>
                                                            <th width="207" align="left" bgcolor="#FBAA19" style="padding: 7px 12px; border-radius: 0px;">
                                                                <span style="font-size:12px;line-height:1.818;font-weight:600;font-family: \'Poppins\', sans-serif;color:#ffffff;margin:0;padding:0;">Sesiones</span>
                                                            </th>
                                                            <th width="60" align="left" bgcolor="#FBAA19" style="padding: 7px 12px; border-radius: 0px;">
                                                                <span style="font-size:12px;line-height:1.818;font-weight:600;font-family: \'Poppins\', sans-serif;color:#ffffff;margin:0;padding:0;">Expositores</span>
                                                            </th>
                                                            <th width="140" align="left" bgcolor="#FBAA19" style="padding: 7px 12px; border-radius: 0px 10px 0px 0px;">
                                                                <span style="font-size:12px;line-height:1.818;font-weight:600;font-family: \'Poppins\', sans-serif;color:#ffffff;margin:0;padding:0;">Designation</span>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">15:00</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Se abren las puertas para el registro</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">NA</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">NA</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">15:45</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Communica8 saludo de bienvenida</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Anindita Guha</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Directora Senior – Crecimiento, Gupshup</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">16:00</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Discurso del CPO</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Gaurav Kachhawa</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">CPO - Gupshup</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">16:30</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Actualizaciones de WhatsApp y Preguntas y Respuestas</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Diana Gonzalez</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Channel Partner Manager Lead Business Messaging North LATAM</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">17:15</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">QBM (Temporada)</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Anindita Guha</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Directora Senior – Crecimiento, Gupshup</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">17:45</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Plataforma de Autoservicio y Portal de partners de Gupshup</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Irma Montenegro<br>Jesus Andrade</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Gerente – Desarrollo empresarial, Gupshup<br>Customer Success Manager, Gupshup</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">18:00</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Café y Bocadillos</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"></span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px 0px 0px 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">18:15</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Actualizaciones de GBM y Preguntas y Respuestas</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">TBD</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px 0px 0px 0px; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">TBD</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">18:45</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Panel ISV</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Moderator (Irma)</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Gerente - Desarrollo empresarial, Gupshup</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px 0px 0px 0px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">19:15</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Panel de Gupshup - Preguntas y Respuestas</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Gaurav Kachhawa<br>Anindita Guha</span>
                                                            </td>
                                                            <td align="left" bgcolor="#F0F0F0" style="padding: 7px 12px; border-radius: 0px 0px 0px 0px; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">CPO - Gupshup<br>Directora Senior – Crecimiento, Gupshup</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px 0px 0px 10px; border-left: 1px solid #E0E0E0; border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">19:45</span>
                                                            </td>
                                                            <td align="left" bgcolor="#FFFFFF" style="padding: 7px 12px; border-radius: 0px 0px 10px 0px;border-bottom: 1px solid #E0E0E0; border-right: 1px solid #E0E0E0;" colspan="3">
                                                                <span style="font-size:11px;line-height:1.818;font-weight:400;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Banda en vivo + Cócteles, comida ligera, networking</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 25px;" align="center">
                                                    <p style="font-size:13px;line-height:1.333;font-weight:500;font-family: \'Poppins\', sans-serif;color:#000000;margin:0;padding:0;">Best,<br><strong style="font-weight: 700;">Team Gupshup</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 0;" align="center">
                                                    <a target="_blank" href="https://www.gupshup.io/">
                                                        <img src="http://54.163.12.14/portfolio/email_templates/meetup/mexico/images/logo-footer.png" width="113" alt="logo-footer.png" style="height:auto;max-width:100%;display:inline-block;">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td><img src="http://54.163.12.14/portfolio/email_templates/meetup/mexico/images/footer-img.png" width="600" alt="footer-img.png" style="width:100%;height:auto;max-width:100%;display:block;">
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for registering</title>
    <meta name="facebook-domain-verification" content="hsvkov9by1okwb1cynuqg5c94uhxko" />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="assets__/css/style.css?r=50888" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <section class="banner-section-main">
        <div class="logo-area">
            <img src="assets/images/logo.svg" alt="logo" />
        </div>
        <div class="custom-container">
            <div class="banner-boxed">
                <div class="img-area">
                    <img src="assets/images/communication-loog.svg" alt="img" />
                </div>
                <div class="heading-text-main">Thank you for registering.</div>
                <div class="date-area-main">Please check your inbox for invite mail.</div>
                <!-- <button class="btn-area-main">Reserva tu lugar</button> -->
                <!-- <div class="logo-boxed-main">
                    <div class="commna-grids-main">
                        <img src="./assets/images/first-logo.svg" alt="logo" />
                    </div>
                    <div class="commna-grids-main">
                        <img src="./assets/images/second-loog.svg" alt="logo" />
                    </div>
                    <div class="commna-grids-main">
                        <img src="./assets/images/third-logo.svg" alt="logo" />
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    
    <footer class="footer-main">
        <div class="custom-container">
            <div class="above-footer-main">
                <div class="custom-row-boxed">
                    <div class="comman-first-col">
                        <div class="logo-img">
                            <img src="assets/images/logo-gupshup.svg" alt="logo" />
                        </div>
                        <div class="footer-fonts">Somos una plataforma de mensajería conversacional que ayuda a las empresas a interactuar con los clientes a través de más de 30 canales de mensajería en comercio, marketing y soporte.</div>
                        <div class="talke-to-sales">
                            <button>Habla con Ventas</button>
                        </div>
                    </div>
                    <div class="center-first-col">
                        <div class="center-columns-main-area">
                            <div class="first-cols-main">
                                <div class="footer-heading">Compañía</div>
                                <div class="menu-area">
                                    <div class="menu-item">
                                        <a href="#" title="Sobre">Sobre</a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#" title="Carreras">Carreras</a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#" title="Liderazgo">Liderazgo</a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#" title="sala de prensa">sala de prensa</a>
                                    </div>
                                </div>
                            </div>
                            <div class="secon-cols-main">
                                <div class="footer-heading">Recursos</div>
                                <div class="comamn-grids-area">
                                    <div class="inner-links">
                                        <a href="#" title="libros electrónicos">libros electrónicos</a>
                                    </div>
                                    <div class="inner-links">
                                        <a href="#" title="Estudios de caso">Estudios de caso</a>
                                    </div>
                                    <div class="inner-links">
                                        <a href="#" title="Blog">Blog</a>
                                    </div>
                                    <div class="inner-links">
                                        <a href="#" title="Preguntas más frecuentes">Preguntas más frecuentes</a>
                                    </div>
                                    <div class="inner-links">
                                        <a href="#" title="Guías">Guías</a>
                                    </div>
                                    <div class="inner-links">
                                        <a href="#" title="Desarrolladoras">Desarrolladoras</a>
                                    </div>
                                    <div class="inner-links">
                                        <a href="#" title="Libros blancos">Libros blancos</a>
                                    </div>
                                    <div class="inner-links">
                                        <a href="#" title="Podcasts">Podcasts</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="last-cols-main">
                        <div class="follow-us-on-text">Síganos</div>
                        <ul class=" d-flex flex-wrap">
                            <li><a target="_blank" href="https://www.linkedin.com/company/gupshup/"
                                    rel="noopener nofollow external noreferrer" data-factors-click-bind="true">
                                    <img src="https://www.gupshup.io/resources/wp-content/uploads/2022/09/Frame-10-1.svg?x95104"
                                        alt="Linkedin" class="mr10 showImg">
                                    <img src="https://www.gupshup.io/resources/wp-content/uploads/2022/09/Frame-1.svg?x95104"
                                        alt="Linkedin" class="mr10 showHoverImg"></a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/gupshup"
                                    rel="noopener nofollow external noreferrer" data-factors-click-bind="true">
                                    <img src="https://www.gupshup.io/resources/wp-content/uploads/2022/09/Frame-9.svg?x95104"
                                        alt="Twitter" class="mr10 showImg">
                                    <img src="https://www.gupshup.io/resources/wp-content/uploads/2022/09/Frame-2.svg?x95104"
                                        alt="Twitter" class="mr10 showHoverImg"></a>
                            </li>
                            <li><a target="_blank" href="https://www.facebook.com/gupshupbots"
                                    rel="noopener nofollow external noreferrer" data-factors-click-bind="true">
                                    <img src="https://www.gupshup.io/resources/wp-content/uploads/2022/09/Frame-8.svg?x95104"
                                        alt="Facebook" class="mr10 showImg">
                                    <img src="https://www.gupshup.io/resources/wp-content/uploads/2022/09/Frame-3.svg?x95104"
                                        alt="Facebook" class="mr10 showHoverImg"></a>
                            </li>
                            <li><a target="_self" href="https://www.instagram.com/gupshup.io/" rel="follow"
                                    data-factors-click-bind="true">
                                    <img src="https://www.gupshup.io/resources/wp-content/uploads/2022/09/Frame-7.svg?x95104"
                                        alt="Instagram" class="mr10 showImg">
                                    <img src="https://www.gupshup.io/resources/wp-content/uploads/2022/09/Frame-5.svg?x95104"
                                        alt="Instagram" class="mr10 showHoverImg"></a>
                            </li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCi5LlP8xNlJgstgLizpjbFw"
                                    rel="noopener nofollow external noreferrer" data-factors-click-bind="true">
                                    <img src="https://www.gupshup.io/resources/wp-content/uploads/2022/09/Frame-6.svg?x95104"
                                        alt="YouTube" class="mr10 showImg">
                                    <img src="https://www.gupshup.io/resources/wp-content/uploads/2022/09/Frame-4.svg?x95104"
                                        alt="YouTube" class="mr10 showHoverImg"></a>
                            </li>
                        </ul>
                        <div class="text-area">Explora WhatsApp para empresas</div>
                        <div class="language-drops-area">
                            <div class="inner-left-side">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        English
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">English</a></li>
                                        <li><a class="dropdown-item" href="#">Italian</a></li>
                                        <li><a class="dropdown-item" href="#">Portuguese</a></li>
                                        <li><a class="dropdown-item" href="#">Russian</a></li>
                                        <li><a class="dropdown-item" href="#">Spanish</a></li>
                                        <li><a class="dropdown-item" href="#">Turkish</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="inner-right-side">
                                <button class="go-btn">Vamos</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="below-footer-main">
                <div class="left-box-main">
                    <div class="links-text">
                        <a href="#" title="Privacidad">Privacidad</a>
                    </div>
                    <div class="links-text">
                        <a href="#" title="Seguridad">Seguridad</a>
                    </div>
                    <div class="links-text">
                        <a href="#" title="Galletas">Galletas</a>
                    </div>
                    <div class="links-text">
                        <a href="#" title="Términos">Términos</a>
                    </div>
                    <div class="links-text">
                        <a href="#" title="DLT">DLT</a>
                    </div>
                </div>
                <div class="right-side">Gupshup © 2022. Todos los derechos reservados.</div>
            </div>
        </div>
    </footer>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/script.js?r=5088"></script>
</body>

</html>