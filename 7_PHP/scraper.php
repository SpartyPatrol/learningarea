<?php
  
  $city=$_GET['city'];
  $city=str_replace(" ", "", $city);
  $weatherURL="http://www.weather-forecast.com/locations/$city/forecasts/latest";

  $contents="";
  
  set_error_handler(function() { /* ignore errors */ });
  
   $contents=file_get_contents("http://www.weather-forecast.com/locations/$city/forecasts/latest");
    restore_error_handler();
  
 

    preg_match('/3 Day Weather Forecast Summary:<\/b><span class=\"read-more-small\"><span class=\"read-more-content\"> <span class=\"phrase\">(.*?)<\/span>/i', $contents, $matches);


//    print_r($matches);

    echo $matches[1];   
?>
