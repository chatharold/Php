<?php
    // indexed arrays
    $devices = ["computer", "cellphones", "ipads"];

    // indexed arrays [position]
    $computer = $devices[0];
    $ipads = $devices[2];

    // index arrays autopush
    $devices[] = "rasberry";

    // functions
    $add_last = array_push($devices, "drone");
    $remove_last = array_pop($devices);
    $remove_first = array_shift($devices);
    $count = count($devices);

    // merch
    $arr_first = [1, 2, 3, 4, 5];
    $arr_second = [6, 7, 8, 9, 10];
    $merge_both = array_merge($arr_first, $arr_second);

    // associative array
    $user = [
        "name" => "Harold",
        "age" => 34,
    ];

    $user_name = $user["name"];
    $user_age = $user["age"];
    $user_add["gender"] = "Male";

    // index with array()
    $fruits = array("Apple", "Banana", "Mango");
    $apple = $fruits[0];

    // associate with array()
    $employee = array(
        "id" => "Harold",
        "ssn" => 34346
    );

    // multi-dimensional
    $database_people = [
        ["name" => "james", "age" => 34],
        ["name" => "peter", "age" => 12],
        ["name" => "brian", "age" => 52],
    ];

    $james = $database_people[0]["name"];
    $peter = $database_people[1]["name"];
    $brian = $database_people[2]["name"];
?>

<body>
    <?php
        echo "<pre>";
        ////////////////////////////////////////////////

        // indexed arrays
        print_r($devices);
        var_dump($devices);

        // indexed arrays [position]
        echo "Devices [0] = ", $computer . "<br>";    
        echo "Devices [2] = ", $ipads . "<br>";

        // index arrays autopush
        print_r($devices);

        // functions
        echo "Push = ", $add_last . "<br>";
        echo "Pop = ", $remove_last . "<br>";
        echo "Shift = ", $remove_first . "<br>";
        echo "Count = ", $count . "<br>";
        var_dump("Merge = ", $merge_both) . "<br>";

        // associative array
        var_dump("Associative array = ", $user) . "<br>";
        echo "User name = ", $user_name. "<br>";
        echo "User age = ", $user_age . "<br>";
        var_dump("User add = ", $user_add). "<br>";

        // indexed with array()
        echo "Array() = ", $apple . "<br>";

        // associate with array()
        echo "Array (=>) = ", $employee["id"] . "<br>";

        // multi-dimensional
        echo "James = ", var_dump($james);
        echo "Peter = ", var_dump($peter);
        echo "Brian = ", var_dump($brian);

        ////////////////////////////////////////////////
        echo "</pre>";  
    ?>
</body>