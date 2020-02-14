<?php

// Date:
// l = weekday
// Y = year four digit
// y = year two digit
// m = month in number
// M = month in letter
// d = day


echo "Day of the week = ", date("l") . "<br>";
echo "Four digit year = ", date("Y") . "<br>";
echo "Two digit year = ", date("y") . "<br>";
echo "Month number = ", date("M") . "<br>";
echo "Day = ", date("d") . "<br>";


// combined
echo "Today is = ", date("l, m/d/Y") . "<br>";

///////////////////////////////////////////////

// Time:
// H = 24 hour
// h = 12 hour
// i = minutes
// s = seconds
// a = meridiem


echo "Twenty four = ", date("H") . "<br>";
echo "Twelve hour = ", date("h") . "<br>";
echo "Minute = ", date("m") . "<br>";
echo "Second = ", date("s") . "<br>";
echo "Meridiam = ", date("a") . "<br>";


// combined
echo "Time = ", date("h:m:sa") . "<br>";


// IMPORTANT
// default time
date_default_timezone_set("America/New_York");
echo "America time zone = ", date("h:i:sa") . "<br>";


// mktime(hour, m[i]n, sec, month, day , year)
$time = mktime(8, 1, 4, 02, 13, 2020);
echo "Make time = ", date("Y:m:d - h:i:sa") . "<br>";


// strtotime
$str_time = strtotime("Feb 13 2020 - 8:05am");
echo "String time = ", date("m/d/Y - h:m:sa") . "<br>";