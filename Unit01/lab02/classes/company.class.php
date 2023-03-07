<?php
/**
 * Name: Jay Dawson II
 * Date:1/26/2023
 * File:company.class.php
 * Description:
 */

class Company{
    private $name;
    private $established_date;
    private $url;
    private $employees;
    private $TotalSalary;


    public function __construct($name,$established_date,$url,$employees){
 $this->name=$name;
 $this->established_date=$established_date;
 $this->url=$url;
 $this->employees=$employees;

    }

    /**
     * @return mixed
     */
    public function getTotalSalary()
    {
        $totalSalary =0;

        foreach ($this->employees as $emp){
            $totalSalary += $emp->getSalary();
        }

        return $totalSalary;
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
    public function getEstablishedDate()
    {
        return $this->established_date;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getEmployees()
    {
        return $this->employees;
    }


}