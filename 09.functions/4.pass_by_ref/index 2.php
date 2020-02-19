<?php

// passing by reference by using & works like global
// global
$number = 20;
function readNumber(&$number) {
    // local
    $number = 100;
    echo "Local = ", $number . "<br>"; // 100
}

 // global
 readNumber($number);
 echo "Global = ", $number ."<br>"; // 100
