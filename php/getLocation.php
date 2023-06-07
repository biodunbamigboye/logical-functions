<?php
function getUserLocation(string $ip = null): string
{
    if (is_null($ip)) $ip = $_SERVER['REMOTE_ADDR'] ?? null;
    if (!$ip) return 'ip_not_found';
    return unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ip));
}

var_dump(getUserLocation('129.205.114.36'));
/*
  @author : Biodun Bamigboye

  Credit : http://www.geoplugin.net

Location Currency, Conversion Rate, Region City
, Map Co-ordinate, Time Zone , Continent, Country Code

Note That this does not work on localhost.
It has to be hosted on a server online

*/
