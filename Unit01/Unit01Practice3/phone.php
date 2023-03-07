<?php
/**
 * Name: Jay Dawson II
 * Date:1/19/2023
 * File:phone.php
 * Description:
 */

require_once('phone.class.php');

$phone1 = new phone("samsung","galaxy","128gb", "2022");



echo "Phone 1";
echo " Brand: " . $phone1->getBrand();
echo " Model: " . $phone1->getModel();
echo " Storage: " . $phone1->getStorage();
echo " Year: " . $phone1->getYear();

