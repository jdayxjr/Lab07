<?php
/**
 * Name: Jay Dawson II
 * Date:2/23/2023
 * File:pyramid_do.php
 * Description:
 */

require_once 'pyramid.class.php';
require_once 'rectangle.class.php';


$width = $_GET['width'];
$length =$_GET['length'];
$height =$_GET['height'];

$p = new Pyramid($height, $width, $length);
echo $p->toString();