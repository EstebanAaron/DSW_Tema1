<?php

use Dsw\Company\Company;
use Dsw\Company\Employee;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase{
  
  public function testCompanyAddEmployee(){
    $company = new Company();

    $this->assertCount(0, $company->getEmployees());
    $employee1 = new Employee("Pedro", 34, 3000);
    $company->addEmployee($employee1);
    $this->assertCount(1, $company->getEmployees());
    $this->assertSame($employee1, $company->getEmployees()[0]);

    $employee2 = new Employee("Dylan", 20, 1450);
    $company->addEmployee($employee2);
    $this->assertCount(2, $company->getEmployees());
    $this->assertSame($employee2, $company->getEmployees()[1]);
  }

  public function testCompanyRemoveEmployee(){
    $company = new Company();
    $employee1 = new Employee("Pedro", 34, 3000);
    $employee2 = new Employee("Dylan", 20, 1450);
    $company -> addEmployee($employee1);
    $company -> addEmployee($employee2);
    $company -> remuveEmployee($employee1);
    $this->assertNotContains($employee1, $company->getEmployees(),"Pedro no deberia estar");
    $this->assertCount(1, $company->getEmployees());
  }

  public function testCompanySalaries(){
    $company = new Company();
    $this->assertSame(0, $company -> companySalaries($company) );
    $employee1 = new Employee("Pedro", 34, 3000);
    $employee2 = new Employee("Dylan", 20, 1450);
    $company -> addEmployee($employee1);
    $company -> addEmployee($employee2);
    $this->assertSame(4450, $company -> companySalaries($company) );
  }
}