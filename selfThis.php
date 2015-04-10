<?php

class Person
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getTitle()
    {
        return $this->getName(). "this person";
    }
    public function sayHello()
    {
        echo "Hello, I'm ".$this->getTitle()."\n";
    }
    public function sayGoobye()
    {
        echo "Googbye from ".self::getTitle()."\n";
    }
}

class Geek extends Person
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function getTitle()
    {
        return $this->getName() . " that geek\n";
    }
}

$geek = new Geek("CoolGuy");
$geek->sayHello();
$geek->sayGoobye();


class Thing
{
    public static function status()
    {
        self::getStatus();
    }
    public static function getStatus()
    {
        echo "Thing is alive\n";
    }
}

class Human extends Thing
{
    public static function getStatus()
    {
        echo "This is deceased\n";
    }
}

Human::status();

?>
