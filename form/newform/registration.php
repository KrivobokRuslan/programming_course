<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration form</title>
</head>
<body>
    <form action = "registration_insert.php" method = "post">
        <label>Email</label>
        <input type = "text" name = "email"<br>
        <label>Username</label>
        <input type = "text" name = "username"<br>
        <label>Password</label>
        <input type = "password" name = "password"<br>
        <input type = "submit" value = "Register">
    </form>
</body>
</html>
<?php
