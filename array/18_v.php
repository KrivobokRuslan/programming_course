<?php
function user(): void {
    $user = [
        'name' => 'Vasul',
        'surname' => 'Ulizluk',
        'patronymic' => 'Vasulovich'
    ];
    $a = 'name';
    $b = 'surname';
    $c = 'patronymic';
    echo $user[$b] . ' ' . $user[$a] . ' ' . $user[$c];
}
$func = 'user';
$func();