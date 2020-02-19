<?php
   
    // boolean
    $male = true; // 1
    $single = false; // ""

    // numbers 
    $number = 20 > 9; // 1
    $number = 10 < 20; // 1
    $number = 10 > 100; // ""
    $number = 10 == 10; // 1
    $number = 5 != 10; // 1
    $number = 4 >= 4; // 1
    $number = 4 <= 5; // 1

    // strings
    $string = "banana" > "apple"; // 1
    $string = "apple" > "banana"; // ""
    $string = "apple" == "banan"; // ""
    $string = "apple" != "apple"; // ""
    $string = "kiwie" <= "kiwie"; // 1

    

    // output //

    // boolean
    echo "Male (true) = ", ($male == 1 ? "Yes" : "Not") . "<br>";
    echo "Single (false) = ", ($single == "" ? "Yes" : "Not") . "<br>";

    // strict and loose comparison
    echo "False = ", (true === 1) . "<br>"; // ""
    echo "True = ", (true == 1) . "<br>"; // 1

    // numbers
    echo "Number = ", $number . "<br>";

    // strings
    echo "String = ", $string . "<br>";

