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
// Hello
// $i = 0;
// 1 ITERATION
// isset('Hello'[0]) // true -> false
// $i = 0 + 1; // $i = 1
// 2 ITERATION
// isset('Hello'[1]) // true -> false
// $i = 1 + 1; // $i = 2;
// 3 ITERATION
// isset('Hello'[2]) // true -> false
// $i = 2 + 1; // $i = 3;
// 4 ITERATION
// isset('Hello'[3]) // true -> false
// $i = 3 + 1; // $i = 4;
// 5 ITERATION
// isset('Hello'[4]) // true -> false
// $i = 4 + 1; // $i = 5;
// 6 ITERATION
// isset('Hello'[5]) // false -> true

// return 5;


// ''[0]