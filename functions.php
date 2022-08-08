<?php
function dd($var): void
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function sum(int $x, int $y): int
{
    return $x + $y;
}

/**
 * [3,4,5]
 *
 * 3R4R5
 * 3-4-5
 * 3+4+5
 * 3*4*5
 */

function arrayImplode(string $glue, array $array): string
{
    $result = $array[0];

    for ($i = 1; $i < count($array); $i++) {
        $result = $result . $glue . $array[$i];
    }

    return $result;
}

function arrayFill(int $startIndex, int $count, $value): array
{
    $result = [];

    for ($i = 1; $i <= $count; $i++) {
        if ($i == 1) {
            $result[$startIndex] = $value;
        } else {
            $result[] = $value;
        }
    }

    return $result;
}

