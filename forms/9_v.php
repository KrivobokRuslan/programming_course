<form action="" method="POST">
    <label for="number1">Число1:</label>
    <input type="text" name="number"><br></br>
    <label for="number2">Число2:</label>
    <input type="text" name="number2">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]) {
    $from = "number1";
    $to = "number2";
    $result = ($from <= $to);
    
    function strLength($from, $to) {
        for ($result = $from; $result <= $to; $result++)
        echo $result . '<br>';
    }
}

 



