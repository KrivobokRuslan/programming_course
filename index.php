<?php
var_dump(false);

/**
 *
 *
 *         |   5   |
 *             ^
 *           /   \
 *        $b       $a
 *
 *
 *
 *
 */

$a = 8;
$b = &$a;
$a = 5;