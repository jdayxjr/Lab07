<?php
/**
 * Name : Jay Dawson II
 * Date : 03/07/23
 * File : person.class.php
 * Description: this is about person class
 */
class Person {
    //private data members for a person's name, gender, and SSN.
    private $first_name;  //first name
    private $last_name;   //last name
    private $ssn; // social security number 111-11-1111

    //the constructor
    public function __construct($first, $last, $gender, $ssn) {
        $this->first_name = $first;
        $this->last_name = $last;
        $this->ssn = $ssn;
    }

    //public get methods
    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return$this->last_name;
    }

    public function getSSN() {
        return $this->ssn;
    }

    //display the string representation of the object
    public function toString() {
        return
            "<strong>Name</strong>: " . $this->getFirstName() . " " .
            $this->getLastName() . "<br><strong>Social Security Number</strong>: " .
            $this->getSSN();
    }
}
//end of class

