<?php
/**
 * Name: Jay Dawson II
 * Date:2/23/2023
 * File:pyramid.class.php
 * Description:
 */

require_once 'rectangle.class.php';

class Pyramid extends Rectangle {
    private $height;

    public function __construct($height, $width, $length){
        parent::__construct($width, $length);
        $this->height = $height;
}

    public function getHeight() {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return pyramid
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getBaseArea():float {
        return $this->getArea();

    }

    public function getVoulume():float{
        return (parent::getArea() * $this->height /3 );
    }

    public function getLateralSurface():float{
       $length = parent::getLength();
       $width  =parent::getWidth();
       $height = $this->height;
       return $length*(sqrt(pow($width/2,2)+pow($height,2)))+ $width*(sqrt(pow($length/2,2)+pow($height,2)));
    }

    public function getSurfaceArea():float{
        return $this->getBaseArea() + $this->getLateralSurface();
    }
    public function toString() {

        //creates a JSON Array to
        $JSON_ARRAY = array(
            "Width"=>number_format(self::getWidth(),2),
            "Length"=>number_format(self::getLength(),2),
            "Height"=>number_format(self::getHeight(),2),
            "Base"=>number_format(self::getBaseArea(),2),
            "Volume"=>number_format(self::getVoulume(),2),
            "Lateral"=>number_format(self::getLateralSurface(),2),
            "Surface"=>number_format(self::getWidth(),2),

        );
        //encodes the array "JSON_ARRAY"
        return json_encode($JSON_ARRAY);
    }
}


