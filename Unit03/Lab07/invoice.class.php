<?php

/**
 * Author: Pierce Issah
 * Date: 03/07/2023
 * File: invoice.class.php
 * Description:
 */
//creating the invoice class
class Invoice implements Payable {
    private $number;
    private $description;
    private $quantity;
    private $price;
    private static $invoice_count;

    //creating the constructor
    public function __construct($number, $description, $quantity, $price) {
        $this->number = $number;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
        self::$invoice_count++;
    }

    //get part number
    public function getNumber() {
        return $this->number;
    }

    //get part description
    public function getDescription() {
        return $this->description;
    }

    //get part quantity
    public function getQuantity() {
        return $this->quantity;
    }

    //get price per item
    public function getPrice() {
        return $this->price;
    }

    //get payment amount
    public function getPaymentAmount() {
        return $this->getQuantity() * $this->getPrice();
    }

    //static method return invoices.
    public static function  getInvoiceCount() {
        return self::$invoice_count;
    }

    public function toString() {
        return "<strong>Part Number</strong>: " .
            $this->getNumber() .
            "<br><strong>Description</strong>: " .
            $this->getDescription() .
            "<br><strong>Quantity</strong>: " .
            $this->getQuantity() .
            "<br><strong>Price</strong>: $" .
            number_format($this->getPrice(), 2) .
            "<br><strong>Payment</strong>: $" .
            number_format($this->getPaymentAmount(), 2);
    }

}
