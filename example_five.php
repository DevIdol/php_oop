<?php
abstract class Person{
    public abstract function talk();

    public function run(){
        echo "Running....";
    }
}

class Female extends Person{
    public $female;
    public function talk()
    {
        echo "$this->female";
    }
}

$person = new Female;
$person->run();
$person->female = "Hla Hla";
$person->talk();


//abstract class' function must call from extends class
//final class must not call form extends class 