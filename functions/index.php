<?php
function fromNtoM(int $n, int $m): void {
    for ($i = $n; $i <= $m; $i++) {
        echo $i . '<br>';
    }
}

fromNtoM(5, 10);