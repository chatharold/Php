<?php

// passing by value "DEFAULT"
// global
$number = 20;
function readNumber($number) {
    // local
    $number = 100;
    echo "Local = ", $number . "<br>"; // 100
}

 // global
 readNumber($number);
 echo "Global = ", $number ."<br>"; // 20
