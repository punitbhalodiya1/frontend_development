<?php
    require("../../../lib/sendgrid/sendgrid-php.php");
   $to = "punitpatel91@gmail.com";
   //$to = "doscroller@gmail.com";
   //$to = "rajnikakadiya@yahoo.com";
   //$to = "systemofstov.2009@gmail.com";
   //$to = "dev.diskrim@gmail.com";
   //$to = "fauster@contentcreators.at"; 
   //$to ="rfauster@gmail.com";
   //$subject = "Middle Land Newsletter";
   //$from = "support@dragboo.com";
   $message='<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Middle Land</title>

<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700);
@import url(https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700);
@import url(https://fonts.googleapis.com/css2?family=Playball);

#outlook a {
    padding: 0;
}
.ReadMsgBody {
    width: 100%;
}
.ExternalClass {
    width: 100%;
}
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
    line-height: 100%;
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
table {
    border-collapse: collapse !important;
}

@media screen and (max-width: 639px) {
.container-table {
    width: 100% !important;
}
.column {
    width: 100% !important;
    table-layout: fixed !important;
    display: block !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    margin-bottom: 10px;
    padding-bottom: 4px !important;
}
.feature-column {
    width: auto !important;
    table-layout: fixed !important;
    display: block !important;
    padding-right: 10px !important;
    padding-left: 10px !important;
    margin-bottom: 10px;
    padding-bottom: 5px !important;
    text-align:center !important;
    word-break:break-all;
}
.hide {
    width: 100% !important;
    table-layout: fixed !important;
    display: none !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
}
.column-text-center {
    width: 100% !important;
    table-layout: fixed !important;
    display: block !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    margin-bottom: 10px;
    text-align: center !important;
}
.footer-left{
    width: 100% !important;
    table-layout: fixed !important;
    display: block !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    text-align:center !important;
    padding-bottom:15px !important;
}
.footer-right{
    width: 100% !important;
    table-layout: fixed !important;
    display: block !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    text-align:center !important;
}

.pd_lr0{padding-left:0px !important; padding-right:0px !important;}
.pd_lr20{padding-left:20px !important; padding-right:20px !important;}
.table-header{display:table-header-group;width:100% !important;}
.table-footer{display:table-footer-group;width:100% !important;}
.mo-tbl-width100{width:100% !important;}
.mo-common-pb40{padding-bottom:40px !important;}
.mo-height-auto{height:auto !important;}

}
</style>
</head>
<body bgcolor="#ffffff" style="margin:0;padding:0;">
    <table width="100%" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;min-width:320px;">
        <tr>
            <td class="center" align="center" valign="top">
            
                <table width="620" bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" class="container-table" style="width:620px;margin:0 auto;text-align:left;">
                
                    <tr>
                        <td style="padding:0;">
                            <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="padding:20px 0 0 0;">
                                        <a target="_blank" href="#"><img src="https://dev.dragboo.com/email-template/lillian/images/ml-logo-3.png" width="215" alt="ml-logo" style="height:auto !important;border:none;outline:none;display:inline-block;vertical-align:middle;max-width:100%;"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding:12px 0 20px 0;">
                                        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center">                                
                                                    <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                        <tr>
                                                            <td width="57" valign="middle">
                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td style="width:100%; display:block;margin:0;padding:0; border-bottom:1px solid #c3c9a4;"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td style="padding:0 25px;">
                                                                <p style="font-family: \'Open Sans\', sans-serif;color:#7D8A35;font-weight:400;font-size:14px;margin:0;padding:0;line-height:120%;">Wisdom - Fall 2020</p>
                                                            </td>
                                                            <td width="57" valign="middle">
                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td style="width:100%; display:block;margin:0;padding:0; border-bottom:1px solid #c3c9a4;"></td>
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
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="padding:0;">
                            <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="container-table mo-height-auto" background="https://dev.dragboo.com/email-template/lillian/images/dreamstime_24373618psd-3.png" bgcolor="dbdabf" valign="top" width="620" height="775" style="width:620px; height:775px; background-repeat:no-repeat; background-color:#dbdabf;background-size:cover; background-position:10% center;">
                                        <!--[if gte mso 9]>
                                        <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:620px;height:775px;">
                                          <v:fill type="tile" src="https://dev.dragboo.com/email-template/lillian/images/dreamstime_24373618psd-3.png" color="#dbdabf" />
                                          <v:textbox inset="0,0,0,0">
                                        <![endif]-->
                                        <div>
                                            <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                
                                                <tr>
                                                    <td align="left" style="padding:40px 35px 0 35px" class="pd_lr20">
                                                        <table width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="mo-tbl-width100">
                                                            
                                                            <tr>
                                                                <td style="padding-bottom:6px;">
                                                                    <h2 style="font-family: \'Cormorant Garamond\', serif;font-size:28px;color:#000000;font-weight:600;margin:0;padding:0;line-height:1.2em;text-align:left;"><a href="https://www.themiddleland.com/whats-the-point-of-going-to-school/" target="_blank" style="font-family: \'Cormorant Garamond\', serif;color:#000000;text-decoration:none; cursor:pointer;">What’s the Point of Going to School?</a></h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding-bottom:40px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-radius:0;">
                                                                        <tr>
                                                                            <td style="padding:2px 0px;letter-spacing: .0.5em;">
                                                                                <p style="font-family: \'Open Sans\', sans-serif;font-size:14px;color:#4D4D4F;font-weight:400;margin:0;padding:0;line-height:1.4em;">A lesson doesn’t have to be informative to be helpful. You can train your ability to understand and judge what’s being said and be aware of others. <a target="_blank" href="https://www.themiddleland.com/whats-the-point-of-going-to-school/" style="font-family: \'Open Sans\', sans-serif;color:#F26522;font-weight:400;font-size:10px;margin:0;padding:0;line-height:20px;text-decoration:underline;outline: 0;cursor: pointer;text-transform:uppercase;">READ MORE</a>
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td align="left" style="padding:0 35px 0 100px" class="pd_lr20">
                                                        <table width="340" align="left" border="0" cellpadding="0" cellspacing="0" class="mo-tbl-width100">
                                                            
                                                            <tr>
                                                                <td style="padding-bottom:8px;">
                                                                    <h2 style="font-family: \'Playball\', cursive;font-size:32px;color:#056839;font-weight:400; font-style:italic;margin:0;padding:0;line-height:1.2em;text-align:left;"><a href="https://www.themiddleland.com/divine-ceilings/" target="_blank" style="font-family: \'Playball\', cursive;;color:#056839;text-decoration:none; cursor:pointer;">Divine Ceilings</a></h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:0 0 92px 55px;" class="pd_lr0 mo-common-pb40">
                                                                    <p style="font-family: \'Open Sans\', sans-serif;font-size:14px;color:#4D4D4F;font-weight:400;margin:0;padding:0;line-height:1.4em;">They placed crosses on domes and steeples as high as humanly possible, to be seen as far as possible. <a target="_blank" href="https://www.themiddleland.com/divine-ceilings/" style="font-family: \'Open Sans\', sans-serif;color:#F26522;font-weight:400;font-size:10px;margin:0;padding:0;outline: 0;cursor: pointer;text-transform:uppercase;display:inline-block;text-decoration:underline;">READ MORE</a></p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td align="left" style="padding:0 55px" class="pd_lr20">
                                                        <table width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="mo-tbl-width100">
                                                            
                                                            <tr>
                                                                <td style="padding-bottom:8px;">
                                                                    <h2 style="font-family: \'Cormorant Garamond\', serif;font-size:28px;color:#000000;font-weight:600;margin:0;padding:0;line-height:1.2em;text-align:left;"><a href="https://www.themiddleland.com/cicada-and-zen/" target="_blank" style="font-family: \'Cormorant Garamond\', serif;color:#000000;text-decoration:none; cursor:pointer;">Cicada and Zen</a></h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:0 0 40px 0;">
                                                                    <p style="font-family: \'Open Sans\', sans-serif;font-size:14px;color:#4D4D4F;font-weight:400;margin:0;padding:0;line-height:1.4em;">"Daddy, the cicada proves that the theory of evolution is actually wrong,” said my 11 year old son, amazed by the life cycle of a cicada. How were the two related? I was very interested to hear his thoughts. <a target="_blank" href="https://www.themiddleland.com/cicada-and-zen/" style="font-family: \'Open Sans\', sans-serif;color:#F26522;font-weight:400;font-size:10px;margin:0;padding:0;outline: 0;cursor: pointer;text-transform:uppercase;display:inline-block;text-decoration:underline;">READ MORE</a></p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td align="left" style="padding:10px 70px 0 34px;" class="pd_lr20 mo-common-pb40">
                                                        <table border="0" cellpadding="0" cellspacing="0" align="left">
                                                            <tr>
                                                                <td width="70" valign="middle">
                                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                        <tr>
                                                                            <td style="width:100%; display:block;margin:0;padding:0;">
                                                                                <a target="_blank" href="#"><img src="https://dev.dragboo.com/email-template/lillian/images/podcast-btn.png" width="70" alt="podcast-btn" style="height:auto !important;border:none;outline:none;display:inline-block;vertical-align:middle;max-width:100%;"></a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td width="295" style="padding:0 0 0 5px;">
                                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                        <tr>
                                                                            <td style="padding-bottom:3px;">
                                                                                <a target="_blank" href="#" style="font-family: \'Open Sans\', sans-serif;color:#231F20;font-weight:bold;font-size:16px;margin:0;padding:0;outline: 0;cursor: pointer;display:inline-block;text-decoration:none;">Miracles of the American Revolution - <span style="font-family: \'Open Sans\', sans-serif;color:#231F20;font-weight:bold;font-size:16px;margin:0;padding:0;outline: 0;cursor: pointer;display:inline-block;text-decoration:none;font-style: italic;">Prayer at Valley Forge</span></a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td style="padding:80px 0 10px 0;">
                                                        <table width="326" align="center" border="0" cellpadding="0" cellspacing="0" style="max-width:326px;" class="mo-tbl-width100">                      
                                                            <tr>
                                                                <td align="center" width="100%" style="max-width:326px; display:block;padding:0; border-bottom:1px solid #c3c9a4;"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                                            
                                                            <tr>
                                                                <td align="center" style="padding: 5px 0 5px 0;">
                                                                    <p style="font-family: \'Open Sans\', sans-serif;color:#939598;font-weight:400;font-size:12px;margin:0;padding:0;line-height:180%;">&copy;&reg;New San Cai, All Rights Reserved<br>100 Wilshire Blvd., Suite 700, Santa Monica, California 90401<br>To unsubscribe, please click <a target="_blank" href="#" style="font-family: \'Open Sans\', sans-serif;color:#D04B2B;text-decoration:none; cursor:default;display:inline-block;cursor:pointer;">Here</a>.</p>
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
                    
                    <tr>
                        <td style="padding:30px 0 40px 0;">
                            <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="100%">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:auto;">
                                            <tr>
                                                <td width="30" align="center" style="padding:0 10px;" class="padding0px8px">
                                                    <a target="_blank" href="#"><img width="30" alt="facebook" src="https://dev.dragboo.com/email-template/lillian/images/facebook-icon.png" style="height:auto;border:none;display:block;"></a>
                                                </td>
                                                <td width="30" align="center" style="padding:0 10px;" class="padding0px8px">
                                                    <a target="_blank" href="#"><img width="30" alt="mail" src="https://dev.dragboo.com/email-template/lillian/images/mail-icon.png" style="height:auto;border:none;display:block;"></a>  
                                                </td> 
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="padding:0;">
                            <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="padding:0;">
                                        <a target="_blank" href="#"><img src="https://dev.dragboo.com/email-template/lillian/images/watch-now.jpg" width="560" alt="watch-now" style="height:auto !important;border:none;outline:none;display:inline-block;vertical-align:middle;max-width:100%;"></a>
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
    $email->setFrom("support@dragboo.com", "Dragboo");
    $email->setSubject("Dragboo: Newsletter");
    $email->addTo($to, "Dragboo");
    $email->addContent("text/html", $message);
    $sendgrid = new \SendGrid('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');
    
    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
    } 
    catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }

   /*$header = "From:".$from."\r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$body,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully!"; 
   }else
   {
      echo "Message could not be sent!";
   }
   */
?>