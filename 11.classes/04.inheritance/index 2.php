<?php

// inheritance: 
// allows to have the same properties and methods from the parent class
// without having to re-create them.

// the child class can have it's own properties and methods 
// created by it's own constructor.
// if no constructor is found, it looks in the parent class

// if the child class uses a constructor, pass the parent class properties
// as arguments and include parent::__construct 
// to avoid re-setting the properties


// 1.
class Admin {
    private $user_name;
    private $password;

    public function __construct($user_name, $password) {
        $this->user_name = $user_name;
        $this->password = $password;
    }

    // getter
    public function getUser() {
        return "User name = $this->user_name" ;
    }
}

// ins Admin
$f_user = new Admin("Harold", 123);

// fatal, private property
// echo $f_user->user_name;

// getter
echo $f_user->getUser() . "<br>";


// sub-class
class Guest extends Admin {
    public $logged;
    public function __construct($user_name, $password, $logged) {
        $this->logged = $logged;
        parent::__construct($user_name, $password);
    }
}

// inst Guest
$s_user = new Guest("James", 456, "Logged in");

echo $s_user->getUser() . "<br>";
