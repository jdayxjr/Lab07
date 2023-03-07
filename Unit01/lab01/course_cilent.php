<?php
/**
 * Name: Jay Dawson II
 * Date:1/19/2023
 * File:course_cilent.php
 * Description:
 */

require_once ('course.class.php');

$course1 = new course_class("Study of the creation, publication, and management of documents, images, and other media types on the Web. ","3","215","INFO-I 101","NEWM-N 215");
$course2 = new course_class("A hands-on introduction to some of the fundamental tools used in industry to produce interactive media-rich Web pages.","3","115","None","NEWM-N 115");
?>
<style>

    h2{
        display: block;
        font-size: 1.5em;
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: bold;

    }

    td {
        width: 300px;
        vertical-align: top;
    }

    table, td {

        border: 1px solid black;
        padding: 5px;
    }
    table {
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
    }

    table {
        display: table;
        border-collapse: separate;
        box-sizing: border-box;
        text-indent: initial;
        word-wrap: break-word;
        border-spacing: 2px;
        border-color: grey;
    }

</style>
<body>
<h2 style="text-align: center">Course Details</h2>
<table>
    <tbody><tr>
        <td style="font-weight:bold">Title</td>
        <td><?=$course1->getTitle()?></td>
        <td><?=$course2->getTitle()?></td>
    </tr>
    <tr>
        <td style="font-weight:bold">Number</td>
        <td><?=$course1->getNumber()?></td>
        <td><?=$course2->getNumber()?></td>
    </tr>
    <tr>
        <td style="font-weight:bold">Credits</td>
        <td><?=$course1->getCredits()?></td>
        <td><?=$course2->getCredits()?></td>
    </tr>
    <tr>
        <td style="font-weight:bold">Description</td>
        <td><?=$course1->getDescription()?></td>
        <td><?=$course2->getDescription()?></td>
    </tr>
    <tr>
        <td style="font-weight:bold">Prerequisite</td>
        <td><?=$course1->getPrerequisite()?></td>
        <td><?=$course2->getPrerequisite()?></td>
    </tr>
    </tbody></table>

</body>