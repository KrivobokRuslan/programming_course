<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<form action="" method= "post">
    <p>
        <label>Логін:</label>
        <input type="text" name="login"/>
    </p>
    <p>
        <label>Пароль:</label>
        <input type="text" name="password"/>
    </p>
    <button class="btn btn-danger" type="submit">Вхід в електронну пошту</button>
</form>
<?php
if (!empty($_POST)) {
    if ($_POST['login'] == 'admin' && $_POST['password'] == 'root') {
        echo '<p>Вітаємо в системі ви адміністратор</p>';
    } else if ($_POST["login"] == 'user' && $_POST["password"] == 'qwerty') {
        echo '<p>Вітаємо в системі, ви користувач</p>';
    } else {
        echo 'Ви не пройшли перевірку';
    }
}