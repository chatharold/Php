<?php
// 1. 
// constructor: fires when the instance is created ..
// it is the first func to run, allowing the bootstrap of the properties
// properties: work more like filters by controlling the visibility ..
// of each properties when calling them from the instance
class User {
    public $name;
    public $age;

    public function __construct($name = "Empty", $age = 0) {
        $this->my_name = "Static harold";
        $this->my_age = "Static 34";
        $this->name = $name;
        $this->age = $age;
    }

    public function fetchName() {
        return "My name is {$this->name}";
    }
    public function fetchAge() {
        return "I am {$this->age} years old";
    }
}

// instances
$user_one = new User();
$user_two = new User();

// issue
// what if i want to modify a property ?, this is too much code
// use the constructor func
$user_one->name = "James";
$user_two->name = "Brian";

// echo
echo $user_one->fetchName() . "<br>";
echo $user_two->fetchName() . "<br>";

// 2. solution
$user_one = new User();
$user_two = new User();

// echo
echo $user_one->my_name . "<br>";
echo $user_two->my_age . "<br>";

// 3. no parameters passed
$user_one = new User();
echo $user_one->name . "<br>"; // "Empty"
echo $user_one->age . "<br>"; // 0

// 4. passing parameters
$user_one = new User("Will", 56);
echo $user_one->name . "<br>";
echo $user_one->age . "<br>";