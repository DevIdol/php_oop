<?php

class Cat {
    static $type = "Mammal";
    static function info(){
        echo "<br>"."Group:" . static::$type;
    }
}

echo Cat::$type;
Cat::info();