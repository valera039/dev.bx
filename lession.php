<?php

require_once "function.php";

$num = 0;
$sum = 0;
echo "Программа сумматор\n";
echo "Вводите числа одно за другим, используя для разделения кнопку Enter; когда закончите ввод - нажмите Enter ещё раз\n";
while(true) {
    $num = Read();
    if ($num == null) break;
    $sum += $num;
}

echo "Результат: {$sum}";