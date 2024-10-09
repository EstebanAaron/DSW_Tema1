<?php

use Dsw\Company\Employee;
use Dsw\Company\Person;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase{

  public function testEmployeeConstructor(){
    $employee = new Employee("Luis", 35, 2500);
    $this->assertInstanceOf(Person::class, $employee);
    $this->assertSame('Luis',$employee->getName());
    $this->assertSame(2500, $employee->getSalary(), 'El salario no es correcto');
    $this->assertSame(35,$employee->getAge(),'La edad no es correcta ');
  }
}