<?php

// String
$name = "John Doe";
echo "String: $name<br>";

// Integer
$age = 30;
echo "Integer: $age<br>";

// Float
$price = 19.99;
echo "Float: $price<br>";

// Boolean
$isAvailable = true;
echo "Boolean: " . ($isAvailable ? "true" : "false") . "<br>";

// Array
$colors = array("Red", "Green", "Blue");
echo "Array: " . implode(", ", $colors) . "<br>";

// Object
class Car {
    public $brand;
    function __construct($brand) {
        $this->brand = $brand;
    }
    function getBrand() {
        return $this->brand;
    }
}
$myCar = new Car("Toyota");
echo "Object: " . $myCar->getBrand() . "<br>";

// NULL
$emptyVar = NULL;
echo "NULL: ";
var_dump($emptyVar); // Shows NULL explicitly
?>
