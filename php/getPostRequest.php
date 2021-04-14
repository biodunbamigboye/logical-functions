<?php
      function getPostRequest(Array $postKeys){
        
        $output=[];
        $errorLog=[];
        foreach ($postKeys as $key ) {   
            if(!array_key_exists($key, $_POST)){
            
            array_push($errorLog,$key);
            continue;
            }
            $data = $_POST[$key];
             $output[$key]=$data;
           }
           return ['data' => $output, 'error' =>$errorLog];
      }


    // -- Usage
getPostRequest(['name','email','keyNotPosted']);
// Return Value 
[
'data' => [
    'name' => 'Biodun Bamigboye',
    'email' => 'biodunbamigboye@eportalnet.com'
],
'error' => ['keyNotPosted']
];
      
/*
Author : Biodun Bamigboye 

This function receives an indexed array of post key indexes 
and returns an associative array of entered data and index
array for keys with no data existing.
Note That data is subjected to further tests by you before
saving it to db

*/