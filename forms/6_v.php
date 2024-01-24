<form action="" method="POST">
    <label for="mainString">Основна строка:</label>
    <input type="text" id="mainString" name="mainString"><br><br>

    <label for="subString">Підстрока:</label>
    <input type="text" id="substring" name="substring"><br><br>
    
    <input type="submit" value="Перевірити"><br><br>
</form>

<?php
function findInString(array $arr) {
    $string = "Hello";
    $search = "Chao";
    $position = strpos($string, $search);
}
    if($position == true) {
        echo "Підрядок не входить в рядок" . "$string" . "$search";
    } else {
        echo "Перший рядок входить в другий рядок";
}
findInString([]);