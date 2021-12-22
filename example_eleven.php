<?php
//Factory Pattern
// ===============
class Profile
{
    private $name;
    private $phone;

    public function __construct($name, $phone)
    {
        echo $this->name = $name ;
        echo $this->phone = $phone . "<br>";
    }
}

$data = [
    ["name" => "Alice", "phone" => "12345"],
    ["name" => "Michael"],
    ["name" => "Joseph", "phone" => "54321"],
];

class ProfileFactory
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function create()
    {
        $result = [];

        foreach ($this->data as $data) {
            $name = $data['name'] ?? "unknow";
            $phone = $data['phone'] ?? "N / A";
            $result[] = new Profile($name, $phone);
        }

        return $result;
    }
}

$pf = new ProfileFactory($data);
$profile = $pf->create();

// print_r($profile);