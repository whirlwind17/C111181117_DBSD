<?php

function vol($length, $width = 10, $height = 15)
{
   print $length."x".$width."x".$height."= ";
   return $length * $width * $height; 
}

$l = 15;
$w = 20;
$h = 15;

print "盒子體積: " . vol($l,$w,$h) . "<br/>" ; 
print "盒子體積: " . vol($l,$w) . "<br/>" ; 
print "盒子體積: " . vol($l) . "<hr/>" ; 
print "盒子體積: " . vol(length: $l) . "<br/>" ; 
print "盒子體積: " . vol(width: $w, length: $l, height: 20) . "<br/>" ; 