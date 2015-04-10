<?php

class MyClass
{
    public $arg;
    public function __construct($arg = NULL)
    {
        if($arg !== NULL)
            $this->arg = $arg;
        else
            return $this->arg; 
    }
    public function returnThisConstruct()
    {
        return $this->__construct();
    }
    public function returnSelfConstruct()
    {
        return self::__construct();
    }
    public function returnNewSelf()
    {
        return new self();
    }
}

$obj = new MyClass("Hello");

print('var_dump($obj)' . "\n");
var_dump($obj);
print("-----------------------\n");

print('var_dump($obj->returnThisConstruct())' . "\n");
var_dump($obj->returnThisConstruct());
print("-----------------------\n");

print('var_dump($obj->returnNewSelf())' . "\n");
var_dump($obj->returnNewSelf());
print("-----------------------\n");

print('var_dump($obj->returnSelfConstruct());' . "\n");
var_dump($obj->returnSelfConstruct());
print("-----------------------\n");

?>
