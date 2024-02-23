<?php
require '../functions.php';
require '../mysql/connect.php';
$id = $_GET['id'];
$delete = "DELETE FROM employee WHERE id = " . $id;
$pdo->query($delete);
header('Location: ' . $_SERVER['HTTP_REFERER']);