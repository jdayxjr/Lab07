<?php
/**
 * Name: Jay Dawson II
 * Date:2/28/2023
 * File:three_dimensional_shape.class.php
 * Description: define the ThreeDimensionalShape class
 */

abstract class ThreeDimensionalShape extends shape{
    abstract protected function getArea();
    abstract protected function getVolume();


    public function toString(){
        echo "<h2>",$this->getName(). "</h2>";
        printf("Area: %.2f",$this->getArea());
        printf("<br> Volume: %.2f", $this->getVolume());
    }
}