<?php
/**
 * Name: Jay Dawson II
 * Date:2/23/2023
 * File:rectangle.class.php
 * Description:
 */

class rectangle {
    protected $width;
    protected $length;

    public function __construct($width, $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth()
    {
        return $this->width;
    }


    public function getLength()
    {
        return $this->length;
    }

    //created the getter to calculate the area for area
    public function getArea():float{
        return $this->width * $this->length;
    }

    public function getPreimeter():float{
        return 2 *($this->width *$this->length);
    }

}


