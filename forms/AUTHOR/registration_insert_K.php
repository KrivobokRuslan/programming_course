<?php
include '../../functions.php';
    $uname = $_POST ['UserName'];//filter_var(trim($_POST ['UserName']),    FILTER_SANITIZE_STRING);
    $mail = $_POST ['E_Mail'];
    $pass = $_POST ['Password'];
   // $creat = $_POST ['created'];
   // $update = $_POST ['updated'];
    $pass = md5($pass."sdfsgss564875468");
    echo $uname . '  '. $mail . '   '.$pass ;
    /*if(mb_strlen($uname<4 || $uname>30)){
        echo 'invalid input';
        exit();
    }
    else if (mb_strlen($mail<5 || $mail>50)){
        echo 'invalid input';
        exit();
    }else if (mb_strlen($pass<5 || $pass>15)){
        echo 'invalid input, enter 5-15 symbol';
        exit();
    }*/
    dd("INSERT INTO Users( `email`, `username`, `password`) VALUES ($mail, $uname, $pass)"); die();
    $mysglconnection = new PDO('mysql:host=course-mysql;dbname=course', 'course_user', 'qwerty');
    $mysglconnection->query("INSERT INTO Users( `email`, `username`, `password`) VALUES ($mail, $uname, $pass)");
    $mysglconnection->close();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>