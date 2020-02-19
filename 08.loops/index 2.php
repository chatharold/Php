<?php

// for
for ($i = 1; $i <= 10; $i++) {
    echo "For = ", $i . "<br>";
}

// while
$number = 0;
while ($number <= 10) {
    $number++;
    echo "While = ", $number . "<br>";
}

// do
$number = 10;
do {
    echo "Do = ", $number . "<br>";
} while(10 > 20); // at least once