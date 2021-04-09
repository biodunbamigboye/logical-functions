<?php

function  isSessionTimeOut(Int $minutes=5): Bool{
$timeout = $minutes * 60; 
$fingerprint = hash_hmac('sha256', $_SERVER['HTTP_USER_AGENT'], hash('sha256', $_SERVER['REMOTE_ADDR'], true));
if(session_id()==''){return true;}
if(!isset($_SESSION['last_active']) ){
    $_SESSION['last_active'] = time();
    $_SESSION['fingerprint'] = $fingerprint;
    return false;  
}

if ( (isset($_SESSION['last_active']) && (time() > ($_SESSION['last_active']+$timeout)))
   || (isset($_SESSION['fingerprint']) && $_SESSION['fingerprint']!=$fingerprint)) {
    return true;
}else{

    session_regenerate_id(); 
    $_SESSION['last_active'] = time();
    $_SESSION['fingerprint'] = $fingerprint;
  return false;
}

      }

/*

Author : Biodun Bamigboye

This function recieves an arguments of the no of minutes you want to keep session alive
The default is 5 Minutes 
returns false if session is still active 
returns true if session has timed out or
There is change in user signature

*/
