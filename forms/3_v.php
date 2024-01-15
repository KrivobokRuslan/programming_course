<html>
    <head>
    <label>число1</label>
    <input type="text" name="number1">
        <label>операція:</label>
        <select name="operation">
            <option value="+">сума (+)</option>
            <option value="-">різниця (-)</option>
            <option value="*">множення (*)</option>
            <option value="/">ділення (/)</option>
    <label>число2</label>
    <input type="text" name="number2">
    </div>
    <button class="btn btn-warning" type="submit">Порахувати</button>
</form>
<?php
    if (!empty ($_POST)) {
        switch ($_POST ['operation']) {
        case '+':
            echo $_POST['number1'] + $_POST['number2'];
            break;
        case '-':
            echo $_POST['number1'] - $_POST['number2'];
            break;
        case '*':
            echo $_POST['number1'] * $_POST['number2'];
            break;
        case '/':
            echo $_POST['number1'] / $_POST['number2'];
            break;
    }
}