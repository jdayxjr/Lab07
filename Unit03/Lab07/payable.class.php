<?php
/*
* Author:Pierce Issah
* Date: 03/07/23
* File: payable.class.php
* Description:
*/

//interface
interface Payable {
    public function getPaymentAmount();
    //creating the get Payment Amount float
    public function toString();
}