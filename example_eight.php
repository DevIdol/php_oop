<?php

class Mathe{
    public function __call($name, $arguments)
    {
        echo "Mehtod $name doesn't exits" . "<br>";
    }

    static function __callStatic($name, $arguments)
    {
        echo "Static Mehtod $name doesn't exits";
    }
}

$obj = new Mathe;
$obj->add();
Mathe::add();