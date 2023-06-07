<?php
function genRandomAlphabet(int $length = 1): string
{
    $output = [];
    for ($i = 0; $i < $length; $i++) $output[] = chr(rand(97, 122));
    return implode("", $output);
}

//-- Usage
print_r(genRandomAlphabet(4));
/*
Author : Biodun Bamigboye

Description
This function generates a random alphabet,
the length passed will be the length of the
return value e.g
genRandomAlphabet(5)
return value : "fhksi"

*/

