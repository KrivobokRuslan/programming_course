<form action="" method="POST">
    <label for="number">Вводимо число:</label>
    <input type="text" name="number"><br></br>
    <label for="number2">Вводимо друге число:</label>
    <input type="text" name="number2">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = $_POST["from"];
    $to = $_POST["to"];
        
}