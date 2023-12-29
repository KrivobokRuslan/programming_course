<?php

function squareArray(array $arr): void {
        $sumSquare = 0;
            foreach ($arr as $val) {
               $sumSquare += $arr **2;
    }
}

echo squareArray($sumSquare);