<?php
//есть значения true и false, это такие же значения как и 1, 5, 'строка'
//проверять обязательно с ===, потому что любая цыфра (не 0) будет в if превращена в true, также как и не пустая строка
$var = 123;

if ($var === true) {
    echo "true";
} else {
    echo "false";
}