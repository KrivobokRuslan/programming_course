<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<form action="" method="POST">
    <label for="search">Пошук</label>
    <input type="text" id="search" name="search">
        <option value="name">І'мя</option>
        <option value="surname">Прізвище</option>
        <option value="patronimik">По батькові</option>

    <input type="submit" value="Шукати">
</form>
<?php
 $user = [
         [
            'name' => 'Taras',
            'surname' => 'Ulizlyuk',
            'partonimik' => 'Vasulovich'
         ],
         [
            'name' => 'Тарас',
            'surname' => 'Улізлюк',
            'patronimik' => 'Васильович'
         ],
];
if (!empty($_POST)) {
    foreach ($user as $database) {
        if ($database['surname'] == $_POST['search']) {
         echo '<p>Знайдено користувача: ' . $database['surname'] . ' ' .  $database['name'] . ' ' .  $database['patronimik'] . '</p>';
        }
    }
}