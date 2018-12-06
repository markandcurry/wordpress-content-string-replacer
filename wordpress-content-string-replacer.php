<?php
/*

Plugin Name: Content String Replacer
description: a plugin to swap dog and variations for cat
Version: 1.0
Author: Mark Warren
Author URI: https://mwwebdev.com
License: GPL2
*/

function swap_stringa_for_stringb($text) {
  $replace = array(
    // example only
    'cat' => 'dog',
    'kitten' => 'puppy',
    'kittens' => 'puppies'
  );

  $text = str_replace(array_keys($replace), $replace, $text);
  return $text;
}

add_filter('the_content','swap_stringa_for_stringb');
