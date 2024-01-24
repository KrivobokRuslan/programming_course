<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<form action="" method="POST">
    <label for="mainString">Основна строка:</label>
    <input type="text" id="mainString" name="mainString"><br><br>

    <label for="subString">Підстрока:</label>
    <input type="text" id="substring" name="substring"><br><br>
    
    <input type="submit" value="Перевірити"><br><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mainString = $_POST['Hello'];
    $substring = $_POST['ll'];

    function findInString($mainString, $substring) {
        return strpos($mainString, $substring) !== false;
    }
    $result = findInString($mainString, $substring);
    echo $result;
}