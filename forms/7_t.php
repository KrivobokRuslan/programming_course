<form action="" method="POST">
    <label for="mainString">Основна строка:</label>
    <input type="text" id="mainString" name="mainString"><br><br>
    <input type="submit" value="Порахувати довжину"><br><br>
</form>

<?php

if (!empty($_POST)) {
    echo strLength($_POST['mainString']);
}
function strLength(string $str): int {
    $i = 0;

    while(true) {
        if (!isset($str[$i])) {
            break;
        }
        $i++;
    }
    return $i;
}
