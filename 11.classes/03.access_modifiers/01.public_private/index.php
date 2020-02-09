<?php

// public: the instance can access the properties or methods of the class
// private: the instance can not access the properties or methods of the class

// 1.
class User {
    public $name;

    // not visible
    private $ssn;

    public function __construct($name, $ssn) {
        $this->name = $name;
        $this->ssn = $ssn;
    }
    // if private, not visible
    public function fetchSnn() {
        return "SSN = $this->ssn";
    }
}

// inst
$user = new User("Harold", 345134);
echo $user->name. "<br>";

// if private, not visible
echo $user->ssn;

echo $user->fetchSnn() . "<br>";