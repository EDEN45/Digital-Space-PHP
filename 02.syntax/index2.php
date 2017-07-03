<?php

$countRows = 9;
$countCols = $countRows;

for ($i = 1; $i <= $countRows; $i++)
{
    print_lighn($i, $countCols);
}

function print_lighn (int $i, int $countCols)
{
    for ($j = 1; $j <= $countCols; $j++)
    {
        echo str_pad($i * $j, 3, " ", STR_PAD_LEFT);
    }
    echo "\n";
}