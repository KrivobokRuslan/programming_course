<form action="" method= "post">
    <p>
        <label>Логін:</label>
        <input type="text" name="login"/>
</p>
    <p>
        <label>Пароль:</label>
        <input type="text" name="pasvord"/>
</p>
    <button type="submit">Вхід в електронну пошту</button>
    </form>
<?php
if (!empty($_POST)) {
    if ($_POST['login'] == $_POST['admin']) {
        echo '<p>Вітаємо в системі ви адміністратор</p>';
    }
}