<?php
/**
 * Author: your name
 * Date: today's date
 * File: mycompany.php
 * Description: this is the client program that tests the Employee and Complany objects
 */


require_once 'classes/company.class.php';
require_once 'classes/employee.class.php';



//add your code to create Employee and Company objects
$employees =[new Employee("Sarah Judy","Accountant",4,35050.89),
    new Employee("Jack Smith","Manager",6,51500.12),
    new Employee("Hellen Sabb","Consultant",3,36005.55),
    new Employee("John Eastin","Technician",3,41000.25)];

$company =new Company("Rainbow Tech Zone","1-20-2004","https://www.rainbowtech.com",$employees);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Profile</title>
    <style>
        body {
            width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            background-color: #e4f1fe;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            height: 30px;
        }

        th, td {
            padding: 5px 5px;
            height: 35px;
        }

        th:nth-child(1),
        td:nth-child(1) {
            width: 200px;
        }

        th:nth-child(2),
        th:nth-child(4),
        td:nth-child(2),
        td:nth-child(4) {
            width: 125px;
            border-left: 1px solid #ccc;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 150px;
            border-left: 1px solid #ccc;
            text-align: center;
        }

        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        div.flexbox {
            display: flex;
            flex-direction: column;
        }

        div.row {
            display: flex;
            flex-direction: row;
            height: 25px;
        }

        div.col {
            width: 150px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
//add your code to create Employee and Company objects

?>

<h2 style="text-align: center">Company Profile</h2>
<div class="flexbox">
    <div class="row">
        <div class="col">Name:</div>
        <div><?=$company->getName()?></div>
    </div>
    <div class="row">
        <div class="col">Established Date:</div>
        <div><?=$company->getEstablishedDate()?></div>
    </div>
    <div class="row">
        <div class="col">Website URL:</div>
        <div><?=$company->getUrl()?></div>
    </div>
</div>
<table>
    <tr>
        <th>Employee Name</th>
        <th>Job Title</th>
        <th>Years of Services</th>
        <th>Salary</th>
    </tr>
    <?php

    // Add your code to display employees
    foreach($employees as $employee){
        echo"<tr>";
        echo"<td>" . $employee->getName() ."</td>";
        echo"<td>" . $employee->getTitle() ."</td>";
        echo"<td>" . $employee->getYears() ."</td>";
        echo"<td>" . $employee->getSalary() ."</td>";
        echo"</tr>";
    }

    ?>
</table>

<!-- display the total salary  -->
<h3 align="right">Total Salaries: $<?php printf('%.2f',$company->getTotalSalary()) ?> </h3>

</body>
</html>