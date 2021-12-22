<?php

class Animal{
    public $name;
    public function run(){
        echo "$this->name is running";
    }
}

$dog = new Animal;
$dog->name = "Bobby";
$dog->run();