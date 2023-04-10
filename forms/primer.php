<?php
/*


require_once 'D:\project\programming_course\forms\connect.php';


*/?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
/*    $tabOk = mysqli_query($connect, query :"SELECT * FROM `OK`");

    */?>
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
<form OK = "" method="get">
    <p>ID: <input type="number" name="id"></p>
    <p>Surname:<input type="text" name="surname"></p>
    <p>Name:<input type="text" name="name"></p>
    <p>Date_of_birth:<input type="number" name="date"></p>
    <p>work_speciality:<br><textarea name="special" cols="30" rows="5"></textarea></p>
            <button type="submit">entering personal data </button>
</form>
</body>
</html>



