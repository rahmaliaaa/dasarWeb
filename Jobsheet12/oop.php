<?php
// class Car
// {
//     private $model;
//     private $color;

//     public function __construct($model, $color)
//     {
//         $this->model = $model;
//         $this->color = $color;
//     }

//     public function getModel()
//     {
//         return $this->model;
//     }

//     public function setColor($color)
//     {
//         $this->color = $color;
//     }

//     public function getColor()
//     {
//         return $this->color;
//     }
// }

// $car = new Car("Toyota", "Blue");

// echo "Model: " . $car->getModel() . "<br>";
// echo "Color: " . $car->getColor() . "<br>";

// $car->setColor("Red");
// echo "Updated Color: " . $car->getColor() . "<br>";


// class Animal {
//     protected $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     public function eat() {
//         echo $this->name . " is eating.<br>";
//     }

//     public function sleep() {
//         echo $this->name . " is sleeping.<br>";
//     }
// }

// class Cat extends Animal {
//     public function meow() {
//         echo $this->name . " saya meow!<br>";
//     }
// }

// class Dog extends Animal {
//     public function bark() {
//         echo $this->name . " saya woof!<br>";
//     }
// }

// $cat = new Cat("Whiskers");
// $dog = new Dog("Buddy");

// $cat->eat();
// $dog->sleep();

// $cat->meow();
// $dog->bark();






//interface Shape {
//    public function calculateArea();
//}

//class Circle implements Shape {
  //  private $radius;

   // public function __construct($radius) {
    //    $this->radius = $radius;
    //}

    //public function calculateArea() {
      //  return pi() * pow($this->radius, 2);
    //}
//}

//class Rectangle implements Shape {
  //  private $width;
    //private $height;

   // public function __construct($width, $height) {
       // $this->width = $width;
     //   $this->height = $height;
    //}

    //public function calculateArea() {
      //  return $this->width * $this->height;
    //}
//}

//function printArea(Shape $shape) {
  //  echo "Area: " . $shape->calculateArea() . "<br>";
//}

//$circle = new Circle(5);
//$rectangle = new Rectangle(4, 6);

//printArea($circle);
//printArea($rectangle);

abstract class Shape {
  abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
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

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";


class Car {
    private $brand;

    public function __construct($brand) {
        echo "A new car is created.<br>";
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function __destruct() {
        echo "The car is destroyed.<br>";
    }
}

$car = new Car("Toyota");
echo "Brand: " . $car->getBrand() . "<br>";

class Animal {
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getColor() {
        return $this->color;
    }
}

$animal = new Animal("Dog", 3, "Brown");

echo "Name: " . $animal->name . "<br>";
echo "Age: " . $animal->getAge() . "<br>";
echo "Color: " . $animal->getColor() . "<br>";
