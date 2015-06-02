<?php
function ip_details($ip) {
    $json = file_get_contents("http://ipinfo.io/{$ip}");
    $details = json_decode($json);
    return $details;
}

$details = ip_details("14.141.108.210");

echo $details->city.'</br>';     // => Mountain View
echo $details->country.'</br>';  // => US
echo $details->org.'</br>';      // => AS15169 Google Inc.
echo $details->hostname.'</br>'; // => google-public-dns-a.google.com


/***************************************/


$jsonData = file_get_contents("http://freegeoip.net/json/14.141.108.210");
$countryInfo = json_decode($jsonData,true);
echo '<pre>';print_r($countryInfo);

/***************************************/
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;


/***************************************/



?>
