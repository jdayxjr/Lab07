<?php
/**
 * Name: Jay Dawson II
 * Date:1/26/2023
 * File:employee.class.php
 * Description:
 */

class Employee{

    private $name;
    private $title;
    private int $years;
    private float $salary;


    public function __construct($name,$title,$years,$salary){


        $this->name=$name;
        $this->title=$title;
        $this->years=$years;
        $this->salary=$salary;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getYears()
    {
        return $this->years;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }



}