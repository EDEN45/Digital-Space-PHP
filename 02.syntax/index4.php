<?php

$array = [1, 1, 2, 3, 3, 3, 4];

foreach (array_unique($array )as $value) {
    echo $value . "   ";
}