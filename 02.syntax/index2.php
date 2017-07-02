<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 02.07.17
 * Time: 18:13
 */

$countRows = 9;
$countCols = $countRows;

for ($i = 1; $i <= $countRows; $i++)
{
    for ($j = 1; $j <= $countCols; $j++)
    {
        print_lighn($i, $j);
    }
    echo "\n\n";
}

function print_lighn (int $i, int $j)
{
    echo str_pad($i * $j, 4, " ", STR_PAD_LEFT);
}