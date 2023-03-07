<?php
/**
 * Name : Jay Dawson II
 * Date : 03/07/23
 * File : commission_employee.class.php
 * Description:
 */
class ComissionEmployee extends Employee {

    private $sales;
    private $comission_rate;

    //add a constructor.
    public function __construct($person,$ssn, $sales, $commission_rate) {
        //include information inherited from the parent class Employee.
        parent::__construct($person, $ssn);
        $this->sales = $sales;
        $this->comission_rate = $commission_rate;
    }
    //the public getters

    //get sales for each sales person.
    public function getSales() {
        return $this->sales;
    }

    //get commission rate for sales people.
    public function getComissionRate() {
        return $this->comission_rate;
    }

    //get the payment amount for the sales person.
    public function getPaymentAmount() {
        return $this->getComissionRate() * $this->getSales();
    }

    //the toString method for formatting numbers.
    public function toString() {
        return
            parent::toString() .
            "<br><strong>Gross sale</strong>: $" . number_format($this->getSales(), 2) .
            "<br><strong>Comission rate</strong>: " . number_format($this->getComissionRate() * 100, 2) ."%" .
            "<br><strong>Salary</strong>: $" . number_format($this->getPaymentAmount(), 2);
    }
}