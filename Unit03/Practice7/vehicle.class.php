<?php
/**
 * Name: Jay Dawson II
 * Date:3/2/2023
 * File:vehicle.class.php
 * Description:
 */

abstract class vehicle{
    private $make

    //constructor
public function __construct($make) {
    $this->make = $make;
}/**
 * @return mixed
 */
public function getMake()
{
    return $this->make;
}/**
 * @param mixed $make
 * @return vehicle
 */
public function setMake($make)
{
    $this->make = $make;
    return $this;
}

//an abstract method
abstract public function horn();

}