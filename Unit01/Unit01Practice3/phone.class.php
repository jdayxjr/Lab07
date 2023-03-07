<?php
/**
 * Name: Jay Dawson II
 * Date:1/19/2023
 * File:phone.class.php
 * Description:
 */

class phone{
    private $brand;
    private $model;
    private $storage;
    private $year;

    public function __construct($brand,$model,$storage,$year)
    {

        // this part is important in the construct define the variables you just created
        $this->brand = $brand;
        $this->model = $model;
        $this->storage = $storage;
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     * @return phone
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     * @return phone
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @param mixed $storage
     * @return phone
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;
        return $this;
    }

    /**
     * @return mixed
     */
    //if you want to make sure that the variable is integer for the value add :int at the end of the get method
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     * @return phone
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }
}
