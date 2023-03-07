<?php
/**
 * Name: Jay Dawson II
 * Date:2/7/2023
 * File:guess.php
 * Description:
 */

if (isset($_COOKIE['random']))
    $random = $_COOKIE['random'];
else {
    $random = rand(1, 100);
    setcookie("random", $random);
}

//retrieve player’s guess
$guess = (int)($_GET['guess']);

if ($guess > $random) {
    echo json_encode(array("result" => 1));
} else if ($guess < $random) {
    echo json_encode(array("result" => -1));
} else {
    echo json_encode(array("result" => 0));
}
