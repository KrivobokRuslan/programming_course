<html>
    <head>
    <label>число1</label>
<input type="text" name="number1">
    <label>число2</label>
    <input type="text" name="number2">
<input type="submit" value="порахувати суму чисел">
</form>
<?php
 if (!empty ($_POST)) {
        echo $_POST['number1'] + $_POST['number2'];
    }
 
 