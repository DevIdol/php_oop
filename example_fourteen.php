<?php
//Provider
// ===========

interface Log {
    public function write();
}

class Text implements Log{
    public function write()
    {
        echo "Saving to text file" . "<br>";
    }
}

class Memory implements Log{
    public function write()
    {
        echo "Saving on memory";
    }
}

class Services {
    public $container = [];

    public function register($name, $class){
        $this->container[$name] = $class;
    }
}

$services = new Services;
$services->register("text", Text::class);
$services->register("memory", Memory::class);

class Provider{
    public $services;

    public function __construct($services)
    {
        $this->services = $services->container;
    }

    public function make($service){
        if(isset($this->services[$service]))
        return new $this->services[$service];
    }
}

$provider = new Provider($services);
$log = $provider->make("text");
$log->write();

$log = $provider->make("memory");
$log->write();