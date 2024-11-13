<?php
class Car{ //soal 1.1
    public $brand;
    public function startEngine(){
        echo "Engine started!";
    }
}
$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

$car1->startEngine();
echo $car2->brand;

class Animal{ //soal 1.2
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
    public function eat(){
        echo $this->name . " is eating. <br>";
    }
    public function sleep(){
        echo $this->name . " is sleeping. <br>";
    }
}
class Cat extends Animal{
    public function meow (){
        echo $this->name . " says meow! <br>";
    }
}
class Dog extends Animal{
    public function bark (){
        echo $this->name . " says woof! <br>";
    }
}
$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();
$dog->sleep();

$cat->meow();
$dog->bark();

interface Shape { //soal 1.3
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea() . "<br>";
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

printArea($circle);
printArea($rectangle);
