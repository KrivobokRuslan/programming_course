<form action="" method="POST">
    <label for="mainString">Основна строка:</label>
    <input type="text" id="mainString" name="mainString"><br><br> // Hello World

    <label for="subString">Підстрока:</label>
    <input type="text" id="substring" name="substring"><br><br> // Hell
    
    <input type="submit" value="Перевірити"><br><br>
</form>

<?php
function findInString(string $string, string $search): bool {
    return strpos($string, $search) !== false;
}

if (!empty($_POST)) {
    echo (int)findInString($_POST['mainString'], $_POST['substring']);
}