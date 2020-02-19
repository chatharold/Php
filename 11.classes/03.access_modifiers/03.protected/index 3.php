<?php

// protected:
// allows the visibility of properties and methods 
// between super and sub classes only
// not from the inst

// Ex.1
// super
class Father {
    protected $account;

    public function __construct($account) {
        $this->account = $account;
    }
}

// sub
class Child extends Father {

}


// super inst
$dad = new Father("$3000");
echo "Father balance = {$dad->account}" . "<br>"; // fatal error

// sub inst
$son = new Child("100");
echo "Son account = {$son->account}" . "<br>"; // fatal error

////////////////////////////////////////////////////

// Ex.2  solution
// super
class Father {
    protected $account;

    public function __construct($account) {
        $this->account = $account;
    }

    public function displayAccount() {
        return "My bank account = {$this->account}" . "<br>";
    }
}

// sub
class Child extends Father {}


// super inst
$dad = new Father("$3000");
echo "Father = {$dad->displayAccount()}";


// sub inst
$son = new Child("100");
echo "Son = {$son->displayAccount()}";