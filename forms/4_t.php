<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<form action="" method="POST">
    <label for="number1">Число 1:</label>
    <input value="<?php echo $_POST["number1"]??0 ?>" type="number" id="number1" name="number1">
    <label for="number2">Число 2:</label>
    <input value="<?php echo $_POST["number2"]??0 ?>"type="number" id="number2" name="number2">
    <label for="number3">Число 3:</label>
    <input value="<?php echo $_POST["number3"]??0 ?>"type="number" id="number3" name="number3">
    <input type="submit" value="Знайти максимальне число">
</form>
    <?php
    if (!empty($_POST)) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];
    
        $maxNumber = max($number1, $number2, $number3);
        echo $maxNumber;
    }