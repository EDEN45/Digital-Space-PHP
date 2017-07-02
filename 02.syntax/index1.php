<?php
/**
 * Created by PhpStorm.
 * User: vyacheslav
 * Date: 02.07.17
 * Time: 18:06
 */

$arr = [];

for ($i = 0; $i < 10; $i++)
{
    $arr[$i] = rand(-90, 35);
    print $arr[$i];
    print ("\n");
}

echo "минимальный элемент массива " . min($arr) . "\n" . "максимальный элемент массива " . max($arr);





