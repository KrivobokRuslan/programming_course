<?php
require_once 'connect.php';
require '../functions.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title> Ok </title>
</head>
<style>
    th, td {
        padding: 10px;
    }
    th{
        background-color: #ffeb3b;
        color: blue;
    }
    td{
        background-color: aqua;
    }
    button{
        background-color: darkorange;
    }
</style>
<body>
<div class="container text-center">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Create Employee</h5>
                    <form action="../employee_create.php" method="post">
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name">
                        </div>
                        <div class="mb-3">
                            <label for="date_of_birth" class="form-label">Date Of Birth</label>
                            <input type="text" class="form-control" id="date_of_birth" name="date_of_birth">
                        </div>
<table>
    <tr>
        <th>ID</th>
        <th>Surname</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>working speciality</th>
        <th>№бригады</th>
        <th>зп</th>
        <th>date_of_editing</th>
    </tr>
   <!-- --><?php

    ?>
    <tr>
        <td>1</td>
        <td>Petrov</td>
        <td>Ivat</td>
        <td>1980-02-03</td>
        <td>Bulder</td>
        <td>3</td>
        <td>10000</td>
        <td>2023-04-09 12-25</td>

    </tr>
</table>
<h3>personal record</h3>
<form action="primer.php" method="get">
    <p>ID: <input type="number" name="id"></p>
    <p><input type="hidden" value="123"></p>
    <p>Surname:<input type="text" name="surname"></p>
    <p>Name:<input type="text" name="name"></p>
    <p>Date_of_birth:<input type="number" name="date"></p>
    <p>work_speciality:<br><textarea name="special" cols="30" rows="5"></textarea></p>
            <button type="submit">entering personal data </button>
            <button type="reset">clear</button>
            <button type="button">BUTTON</button>
</form>
<?php
    if (!empty($_GET)) {
        dd($_GET);
    }
?>
</body>
</html>



