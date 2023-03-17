<?php
function gets(int $n) {
    for ($i = 1; $i <= $n; $i++) {
        echo (int)($i . $i);
    }
}

gets(7);