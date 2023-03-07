<?php
/**
 * Name : Deep Patel
 * Date : 03/07/23
 * File : salaried_employee.class.php
 * Description:
 */


//creating the manager class, which is a subclass for the employee class
class SalariedEmployee extends Employee
{
    private $department;
    private $salary;

    //add a constructor
    public function __construct($person, $ssn, $department, $salary)
    {
        //inherit the employee class's instructor
        parent::__construct($person, $ssn);
        $this->department = $department;
        $this->salary = $salary;
    }

    //return manager's department
    public function getDepartment()
    {
        return $this->department;
    }

    //return manager's salary
    public function getSalary()
    {
        return $this->salary;
    }

    //calculate earnings
    // implement the abstract Payable method
    public function getPaymentAmount()
    {
        return $this->getSalary();
    }

//creating the toString method, formatting the numerical methods.
    public function toString()
    {
        return
            parent::toString() .
            "<br><strong>Department</strong>: " . $this->getDepartment() .
            "<br><strong>Salary</strong>: " . number_format($this->getSalary(), 2) .
            "<br><strong>Total</strong>: " . number_format($this->getPaymentAmount(), 2);
    }
}