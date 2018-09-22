<?php

// You'll have to customise this to match the website
// It only runs during our office hours to avoid accidental maintenance pages over the weekend

function offHours($endHour = 17, $startHour = 9) {
    $offHour = FALSE;

    // create the DateTimeZone object for later
    $dtzone = new DateTimeZone('Europe/London');

    // first convert the timestamp into a string representing the local time
    $time = date('r', time());

    // now create the DateTime object for this time
    $dtime = new DateTime($time);

    // convert this to the user's timezone using the DateTimeZone object
    $dtime->setTimeZone($dtzone);

    // print the time using your preferred format
    $time = $dtime->format('g:i A m/d/y');

    $hour = $dtime->format('G');
    $min  = $dtime->format('i');
    $day  = $dtime->format('D');

    // if weekend
    if(($day == 'Sun' || $day == 'Sat') )
    {
       $offHour = TRUE;
    }

    // if out of office hours
    if (
      ( $hour == ($endHour-1) && $min>=45 ) ||
      ( $hour >= $endHour ) ||
      ( $hour == ($startHour-1) && $min <= 30 ) ||
      ( $hour <= ($startHour -2)) ) {
        $offHour = TRUE;
      }

    return $offHour;
}

$maintenance = false;

// Add allowed IP addresses here
$allowed_ips = array('81.168.40.68');

// Comment this line to stop maintenance
// if ( false == in_array($_SERVER['REMOTE_ADDR'], $allowed_ips)) $maintenance = true;

if ( true == $maintenance && $offHours == false  ) { ?>

<?php

// Add headers, so the site will not be indexed when maintenance page is up
header("HTTP/1.1 503 Service Temporarily Unavailable");
header("Status: 503 Service Temporarily Unavailable");
header("Retry-After: 7200");

?>
<html>

  <head>

    <title>Site under maintenance</title>

    <style>

       body {
        font-size: 16px;
        font-family: arial;
        line-height: 1.5;
        font-weight: 300;
        background: #222;
        color: white;
       }
       h1 {
        font-weight: 300;
        line-height: 1.2;
       }
       a {
        text-decoration: none;
        color: #AE202B !important;
       }
       img {
        max-width: 400px;
            display: block;
            margin: 0 auto 20px auto;
       }

    </style>

  </head>

  <body>

    <div class="container" style="padding: 20px;max-width: 550px;margin: 0 auto;text-align: center;">

      <span>Our website is currently undergoing scheduled maintenance</span>

    </div>

  </body>

</html>


<?php
  exit;
}