<?php
$connect = mysqli_connect('course-mysql', 'course_user','qwerty', 'course/primerusers');
//$pdo = new PDO('mysql:host=course-mysql;dbname=primerusers', 'course_user', 'qwerty');
if (!$connect){
    die('Error');
}
//PRIMER_K/performance/connect.php