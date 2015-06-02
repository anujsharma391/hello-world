<?php
  $Address = urlencode('sec 63, noida');
  $request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$Address."&sensor=true";
  $xml = simplexml_load_file($request_url) or die("url not loading");
  $status = $xml->status;
  if ($status=="OK") {
      echo $Lat = $xml->result->geometry->location->lat;
      echo $Lon = $xml->result->geometry->location->lng;
      echo $LatLng = "$Lat,$Lon";
  }
?>