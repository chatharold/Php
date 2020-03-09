<?php

// static: 
// is used to call the properties and methods directly from the class
// without having to create an instance 
// no constructor needed
// self refers to the class vs $this refers to the instance (n/a) here
// is a static object 

// Ex.1
class AppleStore {
    public static $head_quaters = "Cupertino, CA";
    public static $number_employees = 100;

    public static function getInformation() {
        echo "Location = ", self::$head_quaters . "<br>";
        echo "Employees = ", self::$number_employees . "<br>";
    }
}

// accessing the properties
echo AppleStore::$head_quaters . "<br>";
echo AppleStore::$number_employees . "<br>";

// accessing the method
AppleStore::getInformation();


// <Ex class="2">
class Store {
    private static $employees = ["James", "will", "ana"];

    public static function fetchAllEmployees() {
        foreach(self::$employees as $employee) {
            echo "Name = {$employee} <br>"; 
        }
    }
}
// error
// can not access private property
// echo Store::$employees;

Store::fetchAllEmployees();