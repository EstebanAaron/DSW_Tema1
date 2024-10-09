<?php
namespace Dsw\Company;

use PhpParser\Node\Name;

class Person{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name =$name;
        $this->age =$age;
    }

    public function getName(): string{
        return $this->name;
    }
    public function getAge(): int{
        return $this->age;
    }
    public function getGreet(): string{
        return "Hola soy $this->name";
    }
}