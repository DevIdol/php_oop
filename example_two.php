<?php

use Animal as GlobalAnimal;

class Dog {
    public function __construct(private $name)
    {
        echo "The dog name is $name <br>";
    }
    public function bark(){
        echo "$this->name is bark woft... woft...";
    }
}

$dog = new Dog("Beauty");
$dog->bark();