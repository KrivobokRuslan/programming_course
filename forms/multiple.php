<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="row">
    <div class="col-md-4">
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Число 1:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="number1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Число 2:</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" name="number2">
            </div>
            <button class="btn btn-warning" type="submit">Помножити</button>
        </form>
    </div>
</div>
<?php
if (!empty($_POST)) {
    echo $_POST['number1'] * $_POST['number2'];
}