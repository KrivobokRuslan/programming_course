<form action="" method="POST">
    <label for="number1">Число1:</label>
    <input type="text" name="number1"><br></br>
    <label for="number2">Число2:</label>
    <input type="text" name="number2">
    <button type="submit">Вивести на екран числа</button>
</form>

<?php
if (!empty($_POST)) {
    $from = $_POST["number1"];
    $to = $_POST["number2"];
        for ($result = $from; $result <= $to; $result++)
        echo $result . '<br>';
    }


 



