<?php
/**
 * Name: Jay Dawson II
 * Date:1/12/2023
 * File:rectangle.class.php
 * Description: define the rectangle class
 */

class Rectangle{
    private $width, $height;


    // create a constructor

    public function __construct($width, $height)
    {
        $this->width =$width;
        $this->height=$height;
    }



    // get a rectangle's width
    public function getWidth (){

        return $this->width;
    }

    //set the width of the rectangle
    public function setWidth($w){
        $this->width = $w;
    }

    // the getter and setter for the height

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return Rectangle
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

   //calculate the area of the rectangle
    public function calculateArea(){
        return $this->width * $this->height;

    }

    // calculate the perimeter of a rectangle
    public function calculatePerimeter(){
        return 2 * ($this->width + $this->height);
    }
}