<?php

    // indexed array
    $devices = ["computer", "cellphone", "ipod"];

    // count
    $number_items = count($devices) . "<br>";

    // associative array
    $car = [
        "make" => "toyota",
        "year" => 2020,
        "color" => "blue"
    ];

    // html links
    $nav = [
        "home",
        "about",
        "contact"
    ];
?>

<body>
    <?php
        echo "<pre>";
        // count
        echo "Count = ", $number_items;

        // for loop
        for($i = 0; $i < count($devices); $i++) {
            echo "For loop = ", var_dump($devices[$i]);
        }

        // foreach
        foreach($devices as $device) {
            echo "Foreach = ", var_dump($device);
        }
        echo "</pre>";

        // foreach key  => value
        foreach($car as $key => $value) {
            echo "Car info = $key - $value" . "<br>";
        }
    ?>

    <!-- 1. html links, non semantic -->
    <?php foreach($nav as $link) { ?>
        <ul>
            <li><?= $link; ?></li>
        </ul>
    <?php } ?>

    <!-- 2. html links, using semantic "RECOMMENDED" -->
    <?php foreach($nav as $link) : ?>
        <ul>
            <li><?= $link; ?></li>
        </ul>
    <?php endforeach; ?>
</body>