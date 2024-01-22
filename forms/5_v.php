<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
//function findInString(string $string, string $search): bool
//{
//    $len = mb_strlen($string);
//    $result = false;
//
//    for ($i = 0; $i < $len; $i++) {
//
//    }
//
//    return $result;
//}
//  Hello  ll
//

$database = [
    [
        'name' => 'Vasyl',
        'surname' => 'Ulizlyuk',
        'partonimik' => 'Vasulovich'
    ],
    [
        'name' => 'Василь',
        'surname' => 'Улізлюк',
        'partonimik' => 'Васильович'
   ],
    [
        'name' => 'Ruslan',
        'surname' => 'Kryvobok',
        'partonimik' => 'Ihorovych'
    ],
    [
        'name' => 'Руслан',
        'surname' => 'Кривобок',
        'partonimik' => 'Ігорович'
    ],
    [
        'name' => 'Taras',
        'surname' => 'Ulizlyuk',
        'partonimik' => 'Vasilovych'
    ],
    [
        'name' => 'Тарас',
        'surname' => 'Улізлюк',
        'partonimik' => 'Васильович'
    ],
];
$founded = [];

if (!empty($_POST)) {
    foreach ($database as $user) {
        if (str_contains(mb_strtolower($user['surname']), mb_strtolower($_POST['search']))) {
            $founded[] = $user;
        }
    }
}

?>
<form action="" method="POST">
    <label for="search">Пошук</label>
    <input type="text" id="search" name="search">
    <?php foreach ($founded as $found): ?>
        <option value="name">І'мя: <?php echo $found['name']; ?></option>
        <option value="surname">Прізвище: <?php echo $found['surname']; ?></option>
        <option value="patronimik">По батькові: <?php echo $found['partonimik']; ?></option>
    <?php endforeach; ?>
    <input type="submit" value="Шукати">
</form>