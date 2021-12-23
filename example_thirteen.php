<?php
//Facade Pattern
//================

class CheckOilPressure{
    public function check(){
        echo "Oil Pressure OK." . "<br>";
    }
}

class CheckBreakFluid{
    public function check(){
        echo "Break Fluid Ok."  . "<br>";
    }
}

class Car{
    public $oil;
    public $break;

    public function __construct()
    {
        $this->oil = new CheckOilPressure;
        $this->break = new CheckBreakFluid;
    }

    public function start(){
        $this->oil->check();
        $this->break->check();

        echo "Car Engin Started";
    }
}

$car = new Car;
$car->start();