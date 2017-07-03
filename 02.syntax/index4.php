<?php

$array = [1, 1, 2, 3, 3, 3, 4, 1, 1, 1, 9, 7, 7];

$elment = 0;

foreach ($array as $value) {

    if ($element === $value)
    {
        continue;
    }
    else
    {
        $element = $value;
        echo $element . "   ";
    }
}