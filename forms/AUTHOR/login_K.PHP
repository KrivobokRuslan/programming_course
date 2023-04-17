<?php
$uname = $_POST ['UserName'];
$pass = $_POST ['Password'];
$pass = md5($pass."sdfsgss564875468");
echo $uname,'   '.$pass ;
$mysglconnection = new PDO('mysql:host=course-mysql;dbname=course', 'course_user', 'qwerty');
//$mysglconnection->query("INSERT INTO Users( `username`, `password`) VALUES ($uname, $pass)");
$result = $mysglconnection->query("SELECT * FROM `Users` WHERE `username`= $uname AND `password` = $pass");
$examination = $result->fetch_assoc(); //object in array
if (count($examination) == 0){
    echo 'error, user not found';
    exit();
}
print_r($examination);
exit();
//$mysglconnection->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>