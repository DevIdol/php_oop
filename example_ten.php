<?php
//Builder Pattern
//================
class ProfileBuilder
{

    private $name;
    private $phone;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    function build()
    {
        return new Profile($this);
    }
}

class Profile
{
    public $name;
    public $phone;

    public function __construct(ProfileBuilder $pb)
    {
       echo $this->name = $pb->getName() . "<br>";
       echo $this->phone = $pb->getPhone() . "<br>";
    }

    static function builder()
    {
        return new ProfileBuilder();
    }
}


$user = Profile::builder()
    ->setName("Alice")
    ->setPhone("09777")
    ->build();

// var_dump($user);
print_r($user);



