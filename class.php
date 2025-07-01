<?php

abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    abstract public function makeSound(); 
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof! My name is $this->name";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow! I'm $this->name";
    }
}

interface Swimmer {
    public function swim();
}

class Fish extends Animal implements Swimmer {
    public function makeSound() {
        return "Blub blub! Call me $this->name";
    }
    
    public function swim() {
        return "$this->name is swimming gracefully";
    }
}


$animals = [
    new Dog("bobby"),
    new Cat("sheper"),
    new Fish("buchi")
];

foreach ($animals as $animal) {
    echo $animal->makeSound() . "\n";
    
    if ($animal instanceof Swimmer) {
        echo $animal->swim() . "\n";
    }
}
?>