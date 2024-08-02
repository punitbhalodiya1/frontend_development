<?php

class GoogleCalendarApi
{

    public function GetAccessTokenRefresh($client_id, $redirect_uri, $client_secret, $code)
    {
        $url = 'https://accounts.google.com/o/oauth2/token';

        $curlPost = 'client_id=' . $client_id . '&redirect_uri=' . $redirect_uri . '&client_secret=' . $client_secret . '&code=' . $code . '&grant_type=authorization_code';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
        $data = json_decode(curl_exec($ch), true);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($http_code != 200) {
            throw new Exception('Error : Failed to receieve access token');
        }
        return $data;
    }

    public function GetUserCalendarTimezone($access_token)
    {
        $url_settings = 'https://www.googleapis.com/calendar/v3/users/me/settings/timezone';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url_settings);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $access_token));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $data = json_decode(curl_exec($ch), true);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($http_code != 200)
            throw new Exception('Error : Failed to get timezone');

        return $data['value'];
    }


    public function CreateCalendarEvent($calendar_id, $summary, $all_day, $event_time, $event_timezone, $access_token,$location,$description,$reminder)
    {
        $url_events = 'https://www.googleapis.com/calendar/v3/calendars/' . $calendar_id . '/events';

        $curlPost = array('summary' => $summary,'location'=>$location,'description'=>$description,'reminders'=>array('useDefault'=>false,'overrides'=>array(array('method' => 'popup', 'minutes' => $reminder))));
        
        if ($all_day == 1) {
            $curlPost['start'] = array('date' => $event_time['event_date']);
            $curlPost['end'] = array('date' => $event_time['event_date']);
        } else {
            $curlPost['start'] = array('dateTime' => $event_time['start_time'], 'timeZone' => $event_timezone);
            $curlPost['end'] = array('dateTime' => $event_time['end_time'], 'timeZone' => $event_timezone);
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url_events);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $access_token, 'Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($curlPost));
        $data = json_decode(curl_exec($ch), true);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($http_code != 200)
            throw new Exception('Error : Failed to create event');

        return $data['id'];
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
    <title>Thank You | Communica8 India 2022</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />
    <style>
        html, body{min-height: 100vh;display: flex;flex-direction: column;}
        section.section-copyright{margin-top: auto;}
        .first-section .inner-box{margin: 16.7% 0;}
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
                    <img src="images/logo.svg" alt="logo" />
                </div>
                <h1 class="landing-heading">Thanks for Contacting us..!</h1>
                <div class="date-time">We will contact you soon...</div>
<?php

$capi = new GoogleCalendarApi();
const APPLICATION_ID = '57596860253-ctiv244fmpqlqs5al96kmpa9suvbfupv.apps.googleusercontent.com';
const APPLICATION_REDIRECT_URL = 'https://gupshupcommunica8.com/thankyou.php';
const APPLICATION_SECRET = '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';

if(isset($_GET['code'])) {
    $CODE = $_GET['code'];
    $data = $capi->GetAccessTokenRefresh(APPLICATION_ID, APPLICATION_REDIRECT_URL, APPLICATION_SECRET, $CODE);
    $access_token = $data['access_token'];

    $user_timezone = $capi->GetUserCalendarTimezone($data['access_token']);
    $calendar_id = 'primary';
    $event_title = 'Communica8 India';

// Event starting & finishing at a specific time
    $full_day_event = 0;
    $event_time = ['start_time' => '2022-06-30T15:00:00', 'end_time' => '2022-06-30T20:00:00'];

    $location = "The St. Regis Mumbai 462, Senapati Bapat Marg, Lower Parel, Mumbai, Maharashtra 400013";
    $description = "Conversations of conversation";
    $reminder = 30;

// Full day event
    //$full_day_event = 1;
    //$event_time = ['event_date' => '2022-06-30'];

// Create event on primary calendar
    $event_id = $capi->CreateCalendarEvent($calendar_id, $event_title, $full_day_event, $event_time, $user_timezone, $data['access_token'],$location,$description,$reminder);

    echo '<div class="form-heading">Event added to your calender successfully.</div>';
    //echo '</br>';
    //echo 'event Id:-'.$event_id;

}else{

    $url = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/calendar') . '&redirect_uri=' . APPLICATION_REDIRECT_URL . '&response_type=code&client_id=' . APPLICATION_ID . '&access_type=offline';

    ?>
    <!-- <div class="banner-btn">
        <a href="<?php echo $url; ?>" class="btn-com">Add event to your calender</a>
    </div> -->
    <?php
}

?>
            </div>
        </div>
    </section>

    <section class="section-copyright">
            <div class="container">
                <div class="copyright-text">Copyright 2022</div>
                <a href="https://www.gupshup.io/" target="_blank"><img src="images/white-gupshup.png" alt="img" /></a>
            </div>
    </section>
    <section class="section-bottom">
            <div class="container">
                <a href="https://gupshupcommunica8.com/privacy-policy.html" target="_blank">Privacy Policy</a>
                <a href="https://gupshupcommunica8.com/terms-of-service.html" target="_blank">Terms of Service</a>
                <!-- <div class="copyright-text">Copyright 2022</div>
                <a href="https://www.gupshup.io/" target="_blank"><img src="images/white-gupshup.png" alt="img" /></a> -->
            </div>
    </section>
</body>
</html>
<?php
exit();