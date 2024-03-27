<?php

class Shape {
    public function area() {
    }
}

class Rectangle extends Shape {
    public $width;
    public $height;
    public function area() {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

//I have observed the benefits of using the __construct() method.
$circle = new Circle(7);
echo "Area of the circle: " . $circle->area() . "\n";

//without  __construct() method.
$rectangle = new Rectangle();
$rectangle->width = 8;
$rectangle->height = 10;
echo "Area of the rectangle: " . $rectangle->area() . "\n";