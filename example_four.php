<?php

class Animals {
   protected $name;
   public function __construct($name)
   {
       $this->name = $name;
   } 

   public function run(){
        echo "$this->name is running...";
   }
}

class Dog extends Animals {

    private $color;

    public function __construct($name, $color)
    {
        parent::__construct($name);
        $this->color = $color;

    }

    public function bark(){
        echo "$this->name is bark..";
    }

    public function info(){
        echo "$this->name has $this->color";
    }
}

$dog = new Dog("Bobby");
$dog->run();
$dog->bark();
$dog->info();