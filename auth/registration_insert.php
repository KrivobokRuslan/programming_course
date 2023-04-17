<?php
include '../functions.php';
$pdo = new PDO('mysql:host=course-mysql;dbname=course', 'course_user', 'qwerty');
$insert = "INSERT INTO user (`username`, `password`, `email`) VALUES (:username, :password, :email)";
$statement = $pdo->prepare($insert);
$statement->execute([
    ':username' => $_POST['username'],
    ':password' => md5($_POST['password']),
    ':email' => $_POST['email']
]);
//$pdo->query($insert);
header('Location: ' . $_SERVER['HTTP_REFERER']);