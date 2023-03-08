<?php
/*
* Author: Jay Dawson II
* Date: 03/07/23
* File: base_plus_commission_employee.php
* Description:
*/

class BasePlusCommissionEmployee extends ComissionEmployee {

    private $base_salary;


    //add a constructor.
    public function __construct($person,$ssn, $BaseSalary,$sales,$commission_rate) {
        //include information inherited from the parent class Employee.
        parent::__construct($person, $ssn,$sales,$commission_rate);
        $this->base_salary = $BaseSalary;
    }
    //the public getters

    //get sales for each sales person.
    public function getBaseSalary() {
        return $this->base_salary;
    }

    //get commission rate for sales people.


    //get the payment amount for the sales person.
    public function getPaymentAmount () {
        return parent::getPaymentAmount () * $this->getBaseSalary();
    }

    //the toString method for formatting numbers.
    public function toString() {
        return
            parent::toString() ;
        "<br><strong>Gross sale</strong>: $" . number_format($this->getSales(), 2) .
        "<br><strong>Commission rate</strong>: " . number_format($this->getCommissionRate() * 100, 2) ."%" .
        "<br><strong>Earning</strong>: $" . number_format($this->getPaymentAmount(), 2);
    }
}