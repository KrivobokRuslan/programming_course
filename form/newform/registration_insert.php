<?php
$email = "email";
$username = "root";
$password = "";

$connection = mysqli_connect($email, $username, $password);
if (!$connection) {
    die("Connection failed:" . mysqli_connect_error());
}

$email = mysqli_real_connect($connection, $_POST['email']);
$username = mysqli_real_connect($connection, $_POST['username']);
$password = md5(mysqli_real_connect($connection, $_POST['password']));

$sql = 'INSERT INTO users("email", "username", "password") VALUES($values)';
$query = $pdo->prepare($sql);
$query->execute([$email, $username, $password]);