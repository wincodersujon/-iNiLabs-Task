<?php
class Animal {
    public function makeSound() {
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "The dog barks.\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "The cat meows.\n";
    }
}


class Bird extends Animal {
    public function makeSound() {
        echo "The bird chirps.\n";
    }
}

$dog = new Dog();
$dog->makeSound();

$cat = new Cat();
$cat->makeSound();

$bird = new Bird();
$bird->makeSound();
