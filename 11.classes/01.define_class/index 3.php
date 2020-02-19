<?php

// 1. define a class

// public makes the property visible from the instance
// properties describe something (noun)
// methods are funcs in a class, they describe an action (verb)
// $this refers to the instance of the class ($user_one)
class User {
    public $name = "Harold";
    public $age = 34;

    public function fetchName() {
        return "My name is {$this->name}";
    }
    public function fetchAge() {
        return "I am {$this->age} years old";
    }
}

// instances
$user_one = new User();

// calling properties
echo $user_one->name . "<br>";
echo $user_one->age . "<br>";

// calling methods
echo $user_one->fetchName() . "<br>";
echo $user_one->fetchAge() . "<br>";

// divider
echo "<hr>" . "<br>";

// => class functions
// get the default properties of the class
print_r(get_class_vars("User"));

// get the method's names of the class
print_r(get_class_methods("User"));