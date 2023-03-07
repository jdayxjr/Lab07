<?php
/**
 * Name: Jay Dawson II
 * Date: 02/16/23
 * File:#####
 * Description:population.php
 */

require_once 'population.class.php';

$name = $_GET["name"];

$population = new Population();

echo JSON_encode($population->lookup($name));