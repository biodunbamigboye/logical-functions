<?php
    function getUserLocation(){
    $ip =$_SERVER['REMOTE_ADDR'] ?? false;
    if(!$ip) return 'ip_not_found';
   return unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
                             }

      /*
        Author : Biodun Bamigboye

        Credit : http://www.geoplugin.net

      Location Currency, Conversion Rate, Region City 
      , Map Co-ordinate, Time Zone , Continent, Country Code
        
      Note That this does not work on localhost. 
      It has to be hosted on a server online

      */