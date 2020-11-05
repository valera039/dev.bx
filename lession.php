<?php

include ("./function.php");

$num = 0;
$sum = 0;

while(($num = Read()) != null)
    $sum += $num;

echo "Результат: {$sum}";