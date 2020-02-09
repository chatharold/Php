<?php

// 1.
// getter: reads the private property value
// setter: updates the private property value
class Company {
    public $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    // getter
    public function getMail() {
        return "My bussiness email is = {$this->email}";
    }

    // setter
    public function setMail($new_mail) {
        if (strstr($new_mail, "@")) {
            $this->email = $new_mail;
        } else {
            return "Not a valid email";
        }
    }
}

// inst
$mc_donalds = new Company("Mac-Donalds", "mdonalds@gmail.com");
// echo $mc_donalds->email; // fatal error

$mc_donalds->setMail("james@gmail.com");
echo $mc_donalds->getMail() . "<br>";

//////////////////////////////////////////////////////////////

// 2. practice
class FileMode {
    public $name;
    private $data;

    public function __construct($name, $data) {
        $this->name = $name;
        $this->data = $data;
    }
    // setter
    public function setData($new_data) {
        $this->data = $new_data;
    }

    // getter
    public function getData() {
        return $this->data;
    }
}

// ins
$file_one = new FileMode("Irs", "Payment");

echo "File name = ", $file_one->name. "<br>";
echo "Data = ", $file_one->getData() . "<br>";

// not visible
// echo "Data = ", $file_one->data . "<br>"; // fatal error

// set
$file_one->setData("Stealing");

// get
echo "New data = ", $file_one->getData();