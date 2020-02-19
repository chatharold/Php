<?php
    // defining functions
    function sayName() {
        echo "My name is Harold" . "<br>";
    }
    sayName();

    // using return
    function greet() {
        return "Welcome my friend" . "<br>";
    }
    echo greet();

    // passing args
    function profile($name = "Empty", $age = 0) {
        echo "My names is {$name} and I am {$age} years old" . "<br>";
    }
    profile("Harold", 36);

    // passing args as an associate array
    $user = ["name" => "Harold", "age" => 36, "nationality" => "citizen"];

    function userInfo($user) {
        echo "I am {$user["name"]} with {$user["age"]} years old and a {$user["nationality"]}" . "<br>";
    }
    userInfo($user);
?>