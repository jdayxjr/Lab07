<?php

/**
 * Author: Jay Dawson II
 * Date: 03/07/2023
 * File: employee.class.php
 * Description:
 */
//creating the abstract Employee class
abstract class Employee implements Payable
{
    private $person;
    private $ssn;
    private static $employee_count;

    //creating the constructor
    public function __construct($person, $ssn)
    {
        $this->person = $person;
        $this->ssn = $ssn;


        self::$employee_count++;
    }

//retrieve the person object
    public function getPerson()
    {
        return $this->person;
    }

//retrieve the employee's id
    public function getSSN()
    {
        return $this->ssn;
    }


//static method returns number of employee objects
    public static function getEmployeeCount()
    {
        return self::$employee_count;
    }
}