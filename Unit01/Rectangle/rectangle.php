<?php
/**
 * Name: Jay Dawson II
 * Date:1/12/2023
 * File:rectangle.php
 * Description: client program of the Rectangle class
 */

require_once 'rectangle.class.php';

// create two rectangle objects
$c1 = new rectangle(20, 30);
$c2 = new rectangle(10, 5);

//set the width and height of the rectangles above
//$c1->setWidth(20);
//$c1->setHeight(30);

//$c2->setWidth(5);
//$c2->setHeight(10);

//determine the area and perimeter of c1
$area = $c1->calculateArea();
$perimeter = $c1->calculatePerimeter();

echo "Rectangle 1 area=$area, perimeter=$perimeter";

$area = $c2->calculateArea();
$perimeter = $c2->calculatePerimeter();

echo "<br>Rectangle 2 area=$area, perimeter=$perimeter";