<?php

use Dsw\Company\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testPersonConstructor() {
        $person1 = new Person('Pepe', 34);
        $this->assertSame('Pepe',$person1->getName());
        $this->assertSame(34,$person1->getAge(),'La edad no es correcta ');
    }

    public function testGreet(){
        $person1 = new Person('Pepe', 34);
        $this->assertSame('Hola soy Pepe',$person1->getGreet(), 'Falla al saludar');
    }
}
