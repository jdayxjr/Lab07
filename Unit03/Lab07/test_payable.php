<?php
/*
* Author: Jay Dawson II
* Date: 03/06/23
* File: test_payable.php
* Description:
*/

require_once ("autoloading.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Payroll System</title>
</head>
<body>
<h2>Payroll System Programmed with OOP</h2>
<p>**********************************************</p>
<?php
//create information for the invoice.
$invoice1 = new Invoice(051, "Seat", 2, 375.00);
$invoice2 = new Invoice(471, "Tire", 1, 90.00);


//create information about Salaried Employee.
$se = new SalariedEmployee(new Person("Carter Smith", "1", "3", "Research & Development", "$3,800.00"));

//create information about Hourly Employee.
$he = new HourlyEmployee("Karen Price", "2", "4", "Marketing", "3,200.00", "3,000.00");

//create information about Commission Employee.
$ce = new CommissionEmloyee("Sue Jones", "3", "6", "19002319", "4");

//create information about Base Plus Commission Employee.
$bce = new BasePlusCommissionEmployee("lil jones", "5","5000","7","12");

//create array of employees
$payables = array($invoice1, $invoice2, $se, $he, $ce, $bce );


//display the string representation of Payable Objects.
foreach ($payables as $payable) {
    echo "<h3>", get_class($payable), "<h3>";
    echo $payable->toString();
    echo "<br><br>*****************************<br>";
}

//display the number of employees & invoices.
echo "<br><strong>Number of invoices</strong>: " . Invoice::getInvoiceCount();
echo "<br><strong>Number of employees</strong>: " . Employee::getEmployeeCount();
?>

</body>
</html>