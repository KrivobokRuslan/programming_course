<h3>Вводимо тест в поле "Пошук" та нажимаємо на кнопку "Шукати". Пошук має відбуватися за полями "name", "surname", "patr".</h3>
<h4>Додатково:</h4>
<ul>
    <li>пошук має відбуватися на англ та укр мовах</li>
    <li>пошук не має бути залежним від регістру введеного тексту ("Kryvobok" та "kryvobok" мають видавати один і той самий результат)</li>
    <li>пошук має відбуватися за частиною слова ("kryvo" видає інформація про користувача)</li>
</ul>
<form action="" method="post">
    <label>Пошук</label>
    <input type="text" name="search"/>
    <button type="submit">Шукати</button>
</form>

<?php
$database = [
    [
        'name' => 'Руслан',
        'surname' => 'Кривобок',
        'patr' => 'Ігорович'
    ],
    [
        'name' => 'Тарас',
        'surname' => 'Улізлюк',
        'patr' => 'Васильович'
    ],
    [
        'name' => 'Василь',
        'surname' => 'Улізлюк',
        'patr' => 'Васильович'
    ],
];

if (!empty($_POST)) {
    foreach ($database as $user) {
        if ($user['surname'] == $_POST['search']) {
            echo '<p>Знайдено користувача: ' . $user['surname'] . ' ' . $user['name'] . ' ' . $user['patr'] . '</p>';
        }
    }
}