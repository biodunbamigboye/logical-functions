<?php 
$object = json_encode([
    'name' => 'Biodun Bamigboye',
    'job_title' => 'lead developer'
    ]);
$userdataAsObject = json_decode($object);
echo $userdataAsObject->name ;
 /* return Value : Biodun Bamigboye */

 //-- To convert it to an array
 $userdataAsArray = json_decode($object,true);
 echo $userdataAsArray['name'] ;
 /* return Value: Biodun Bamigboye */

 /* 
Author : Biodun Bamigboye
 */