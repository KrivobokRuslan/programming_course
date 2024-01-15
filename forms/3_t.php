<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<form action="" method="post">
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
        <button type="submit">порахувати</button>
</form>
<?php
    if (!empty ($_POST)) {
        if ($_POST ['operation'] == '+') {
            echo $_POST['number1'] + $_POST['number2'];
        }
        if ($_POST ['operation'] == '-') {
            echo $_POST['number1'] - $_POST['number2'];
        }
        if ($_POST ['operation'] == '*') {
            echo $_POST['number1'] * $_POST['number2'];
        }
        if ($_POST ['operation'] == '/') {
            echo $_POST['number1'] / $_POST['number2'];
        }
    }