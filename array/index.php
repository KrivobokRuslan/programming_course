<?php
// ['hello', 'world', ' '] -> hello world
// ['hello', 'world', ','] -> hello,world
// ['hello', 'world', '-'] -> hello-world
// [0 => 'hello', 1 => 'world', '+'] -> hello+world -> +hello+world

function implodeAnalog(array $in, string $separator): string
{
    $out = '';

    foreach ($in as $k => $value) {
        if ($k == 0) {
            $out = $out . $value;
        } else {
            $out = $out . $separator . $value;
        }
    }

    return $out;
}

echo implodeAnalog(['hello', 'world', 'i', 'can', 'programming'], ' ');