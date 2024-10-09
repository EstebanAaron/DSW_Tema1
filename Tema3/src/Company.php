<?php

namespace Dsw\Company;

class Company {
  private array $employees = [];

  public function __construct()
  {
    $this->employees=[];
  }

  public function getEmployees() : array {
    return $this->employees;
  }

  public function addEmployee(Employee $employee): void{
    array_push($this->employees, $employee);
  }

  public function remuveEmployee(Employee $employee): void{
    $pos =array_search($employee, $this->employees);
    if (!$pos !== false) {
      array_splice($this->employees, $pos, 1);
    }
  }
  public function companySalaries() : int {
    $totalSalaries= 0;
    foreach ($this->employees as $employee) {
      $totalSalaries += $employee->getSalary();
    }
    return $totalSalaries;
  }
}

