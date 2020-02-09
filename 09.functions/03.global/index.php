<?php

// make a (local property global) by using global
// global
$number = 20;
function readNumber($number) {
    // local
    global $number;
    $number = 200;
    echo "Local = ", $number . "<br>";  // 200
}

 // global
 readNumber($number);
 echo "Global = ", $number ."<br>"; // 200
