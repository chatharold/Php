<?php
    // string && mutation
    $name = "harold";
    $name = "James";

    // numbers
    $integer = 7;
    $float = 39.756;

    // const
    define("TITLE", "Programmer");
    // TITLE = "tech"; // error

    const pi = 3.14;

    // boolean
    $married = true ? "true" : "false";
    $female = false ? "true" : "false";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php</title>
</head>
<body>
    <?php
        echo "Name: {$name}" . "<br>";
        echo "Integer: {$integer}" . "<br>";
        echo "Float: {$float}" . "<br>";

        echo "Title: ", TITLE . "<br>"; 
        echo "Pi: ", pi . "<br>";
        
        echo("Married: {$married}" . "<br>");
        echo("Female: {$female}" . "<br>");
    ?>
</body>
</html>