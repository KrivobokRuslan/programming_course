<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$connection = mysqli_connect($host, $username, $password, $dbname);
if (!$connection) {
    die("Connection failed:" . mysqli_connect_error());
}

$email = mysqli_real_connect($connection, $_POST['email']);
$username = mysqli_real_connect($connection, $_POST['username']);
$password = md5(mysqli_real_connect($connection, $_POST['password']));

if