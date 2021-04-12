<?php

$validateEmail = fn(String $email): bool  =>  filter_var($email, FILTER_VALIDATE_EMAIL);

/*
Author : Biodun Bamigboye

Usage
$validateEmail('bamigboyebiodun@eportalnet.com'));
return value : true


*/
