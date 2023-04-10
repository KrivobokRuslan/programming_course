<?php



if (!empty($_POST)) {
    debug($_POST);

?>
    <!DOCKTYPE html >
<head >
    <title > FORM</title >
    <meta charset = " 'utf-8" >
</head >
<body >
<form action = 'form.php' method = 'post' >
    <label for="id" > ID</label ><br >
    <input type = 'text' name = 'id' ><br >
    <label for="name" > Имя</label ><br >
    <input type = 'text' name = 'name' ><br >
    <label for ="email" > E - mail</label ><br >
    <input type = 'text' name = "email" ><br >
    <label for ="I agree" > Соглашаюсь с обработкой данных </label ><br >
    <input type = 'checkbox' name = 'I agree' ><br >
    <input type = 'submit' value = 'Send' >
</form >

</body >