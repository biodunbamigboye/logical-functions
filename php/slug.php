<?php
function slug(String $text): String{ 

    // replace non letter or digits by -
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
  
    // trim
    $text = trim($text, '-');
  
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  
    // lowercase
    $text = strtolower($text);
  
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
  
      //  Limit String Length to 50 Characters
      $text =substr($text,0,50);
  
    if (empty($text))
    {
      return 'n-a';
    }
  
    return $text;
  }

