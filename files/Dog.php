<?php

namespace Project\files;

class Dog
{
    private $age = "";
    private $poroda = "";

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function setPoroda($poroda)
    {
        $this->poroda = $poroda;
        return $this;
    }

    public function Print()
    {
        echo "собаченка {$this->age} лет, породы {$this->poroda} сдохла нахуй";
    }
}

$dog1 = new Dog();
$dog2 = new Dog();
$dog1->setAge(5)->setPoroda('twarina')->Print();
$dog2->setAge(3)->setPoroda('taksa')->Print();



