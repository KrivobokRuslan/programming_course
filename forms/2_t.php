<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<label>число1</label>
<input type="text" name="number1">
    <label>число2</label>
    <input type="text" name="number2">
<input type="submit" value="порахувати суму чисел">
</form>
<?php
 if (!empty ($_POST)) {
    if ($_POST ['operation'] == '+') {
        $sum = $_POST['number1'] + $_POST['number2'];
        echo $sum;
    }
 }