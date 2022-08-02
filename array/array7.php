<?php
//Создайте массив $user с ключами 'name', 'surname', 'patronymic'
//и какими-то произвольными значениями. Выведите на экран фамилию, имя и отчество через пробел.


$user = array('name' => 'Ruslan', 'surname' => 'Kryvobok', 'patronymic' => 'Ihorevich');

echo $user['name'].' '.$user['surname'].' '.$user['patronymic'];