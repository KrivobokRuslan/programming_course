<?php
require '../functions.php';
require '../mysql/connect.php';
$values = "'" . $_POST['full_name'] . "','". $_POST['date_of_birth'] . "','" . $_POST['position'] . "'," . $_POST['salary'];
$insert = "INSERT INTO employee (`full_name`, `birth_date`, `position`, `salary`) VALUES ($values)";
$pdo->query($insert);
header('Location: ' . $_SERVER['HTTP_REFERER']);