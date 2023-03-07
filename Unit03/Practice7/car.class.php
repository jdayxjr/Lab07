<?php
/**
 * Name: Jay Dawson II
 * Date:3/2/2023
 * File:car.class.php
 * Description:
 */

class Car extends vehicle implements Nameable{
    private $name

    //constructor
public function __construct($name, $make) {
    parent::__construct($make);
    $this->name = $name;
}/**
 * @return mixed
 */
public function getName()
{
    return $this->name;
}/**
 * @param mixed $name
 * @return Car
 */
public function setName($name)
{
    $this->name = $name;
    return $this;
}
//the horn method simulates the sound.
public function horn() {
    return "Beep Beep";
}

public function toString() {
    echo "<b>Name</b>: ", $this->getName();
    echo "<br><b>Make</b>: ", $this->getMake();
    echo "<br><b>Horn Sound</b>: ", $this->horn();
}


}