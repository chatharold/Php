<?php

// the first to be true runs 
$number = 12;

switch($number) {
    case ($number > 5):
        echo "Twelve is greated than 5"; // this one
    break;
    case ($number < 30):
        echo "Twelve less than 30";
    break;
    default:
        echo "Not defined";
}
