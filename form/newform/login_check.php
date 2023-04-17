<?php

$username = "text";
$password = "password";


$connection = mysqli_connect($username, $password);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';
$email = mysqli_real_connect($connection, $_POST['email']);
$password = md5(mysqli_real_connect($connection, $_POST['password']));

if($username === '' || $password === '') {
    $message = 'field is required';
}
