<form action="" method="post">
    <div class="mb-3">
        <label>Число 1:</label>
        <input type="text" name="number1">
    </div>
    <div class="mb-3">
        <label>Операція:</label>
        <select name="operation">
            <option value="+">Сума (+)</option>
            <option value="-">Різниця (-)</option>
            <option value="*">Множення (*)</option>
            <option value="/">Ділення (/)</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Число 2:</label>
        <input type="text" name="number2">
    </div>
    <button class="btn btn-warning" type="submit">Порахувати</button>
</form>
<?php
if (!empty($_POST)) {
    if ($_POST['operation'] == '+') {
        echo $_POST['number1'] + $_POST['number2'];
    }
    if ($_POST['operation'] == '-') {
        echo $_POST['number1'] - $_POST['number2'];
    }
    if ($_POST['operation'] == '*') {
        echo $_POST['number1'] * $_POST['number2'];
    }
    if ($_POST['operation'] == '/') {
        echo $_POST['number1'] / $_POST['number2'];
    }
}