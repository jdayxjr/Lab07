<?php
/**
 * Name : Jay Dawson II
 * Date : 03/07/23
 * File : hourly_employee.class.php
 * Description:
 */
class HourlyEmployee extends Employee {
    private $wage;
    private $hours;

    //creating the constructor
    public function __construct($wage, $hours,$person,$ssn) {
        $this->wage = $wage;
        $this->float = $hours;
        parent::__construct($person, $ssn);
    }

//get part name
    public function getWage() {
        return $this->wage;
    }

//get item quantity
    public function getHours() {
        return $this->hours;
    }
    public function getPaymentAmount()
    {
        if ($this->getHours() < 40)
            return $this->getHours() * $this->getWage();
        else
            return 40 * $this->getWage() + ($this->getHours() - 40) * 1.5 * $this->getWage();
    }

    public function toString() {
        return
            parent::toString() .
            "<br><strong>Wage per hour</strong>: $" . number_format($this->getWage(), 2) .
            "<br><strong>Hours</strong>: " . $this->getHours() .
            "<br><strong>Salary</strong>: $" . number_format($this->getPaymentAmount(), 2);
    }
}
