<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <div class="row">
        <div class="col-md-4">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Логін:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="login">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Пароль:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" name="password">
                </div>
                <button class="btn btn-warning" type="submit">Вхід в електронну пошту</button>
            </form>
        </div>
    </div>
    <p>sadfvsdfbdfxbcvvxcvb</p>
        <?php
        if (!empty($_POST)) {
            if ($_POST["login"] == 'admin' && $_POST["password"] == 'root') {
                echo '<p>Вітаємо в системі, ви адміністратор</p>';
            } else if ($_POST["login"] == 'user' && $_POST["password"] == 'qwerty') {
                echo '<p>Вітаємо в системі, ви користувач</p>';
            } else {
                echo 'Ви не пройшли перевірку';
            }
        }?>
    </body>
</html>


