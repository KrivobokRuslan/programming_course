<form action="" method="post">
    <p>
        <label>''''Логін:</label>
        <input type="text" name="login">
    </p>
    <p>    
        <label>Пароль:</label>
        <input type="text" name="password">
    </p>
    <button type="submit">Вхід в електронну пошту</button>
</form>
   <?php
    print_r($_POST);
    if (!empty($_POST)) {
    print_r($_POST['login']);
}
    if (!empty($_POST)) {
    print_r($_POST['password']);
}
    if (!empty($_POST)) {
    print_r($_POST["login"] == 'Логін' && $_POST["password"] == 'Пароль') {
        echo '<p>Вітаємо в системі, ви адміністратор</p>';
    }
}
    if (!empty($_POST)) {
    print_r($_POST["login"] == 'user' && $_POST["password"] == 'qwerty') {
        echo '<p>Вітаємо в системі, ви користувач</p>';
    }
}
    if (!empty($_POST)) {
    print_r($_POST["login"] !== 'Логін' && $_POST["password"] !== 'Пароль') {
        echo '<p>Ви не пройшли перевірку</p>';
    }
}
    if (!empty($_POST)) {
    print_r($_POST["login"] !== 'user' && $_POST["password"] !== 'qwerty') {
        echo '<p>Ви не пройшли перевірку</p>';
    }
}