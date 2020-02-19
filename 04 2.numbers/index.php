<?php
    // operations
    $add = 1 + 2;
    $sub = 3 - 1;
    $mul = 3 * 3;
    $div = 8 / 2;
    $mod = 4 / 3;

    // increment
    $inc_value = 1;
    $inc_value += 1;
    $inc_value = $inc_value + $inc_value;

    // decrement
    $dec_value = 10;
    $dec_value -= 1;
    $dec_value = $dec_value - $dec_value;

    // functions
    // ceil
    $ceil_value = 45.8;
    $ceil_value = ceil($ceil_value);

    // floor
    $floor_value = 45.98;
    $floor_value = floor($floor_value);

    // pi
    $pi = pi();

    // order of operations [ P E M D A S ]
    $pemdas = (4 + 5) * 2;

?>


<body>
    <?php
        // operations
        echo "Add (1 + 2) = ", $add . "<br>";
        echo "Sub (3 - 1) = ", $sub . "<br>";
        echo "Mul (3 * 3) = ", $mul . "<br>";
        echo "Div (8 / 2) = ", $div . "<br>";
        echo "Mod (4 % 3) = ", $mod . "<br>";

        // increment
        echo "Increment (1) = ", $inc_value . "<br>";
        // dec
        echo "Decrement (10) = ", $dec_value . "<br>";

        // function
        echo "Ceil (45.8) = ", $ceil_value . "<br>";
        echo "Floor (45.98) = ", $floor_value . "<br>";
        echo "Pi = ", $pi . "<br>";

        // pemdas
        echo "Pemdas (4 + 5 then * 2 ) = ", $pemdas . "<br>";

    ?>
</body>