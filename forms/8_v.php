<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<form action="" method="POST">
    <label for="string">Вводимо слово:</label>
    <input type="text" name="string"><br></br>
    <button type="submit">Вивести навпаки:</button>
</form>

<?php
if ($_SERVER("POST")) {
    echo findInString($_POST['string']);
}
{
    $inputString = "string";
    $reversedString = "submit";

    function findInString($inputString, $reversedString) {
        return strpos($inputString, $reversedString) == false;
        $result = findInString($inputString, $reversedString);
        echo $result;

    }
    }

