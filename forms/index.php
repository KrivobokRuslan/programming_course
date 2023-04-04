<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
    <form action="index.php" method="get">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
    </body>
</html>

<?php
print_r($_GET);
// login == user
// password == admin
if (isset($_GET['login']) && isset($_GET['password']) && $_GET['login'] == 'user' && $_GET['password'] == 'admin') {
    echo '<h4>User with login "' . $_GET['login'] . '" successfully authorized</h4>';
} else {
    echo 'Not authorized';
}