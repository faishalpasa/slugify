<?php

function strip_str($text){
    $text = preg_replace('~[^\pL\d]+~u', '-', $text); // replace non letter or digits by -
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text); // transliterate
    $text = preg_replace('~[^-\w]+~', '', $text); // remove unwanted characters
    $text = trim($text, '-'); // trim
 	  $text = preg_replace('~-+~', '-', $text); // remove duplicate -
	  $text = strtolower($text); // lowercase
	  if (empty($text)) {
    	return null;
    } 
    return $text;
}
