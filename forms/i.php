<?php
if (!empty($_POST)) {
    $from = $_POST["number"];
    $to = $_POST["number2"];
    for ($i = $from; $i <= $to; $i++) {
        echo $i;
    }
}