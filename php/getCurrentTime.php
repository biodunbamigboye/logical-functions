<?php
function getCurrentTimeWithZone(){
    $timeZone = DateTime::getTimezone ();
    $date = new DateTime("now", new DateTimeZone($timeZone));
  return $date->format('Y-m-d H:i:s');
  }
  var_dump(date_default_timezone_get());