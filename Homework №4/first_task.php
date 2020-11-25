<?php

require_once "../Homework №2/readFromConsole.php";

function assertEquals($expected, $received, $message)
{
    if ($expected === $received) {
        echo $message . " - passed" . PHP_EOL;
    } else {
        echo $message . " - failed" . PHP_EOL;
    }
}

function maxAmount(array $input)
{
    $maxDigit = 0;
    $count = 0;
    foreach ($input as $i)
    {
        if ($i > $maxDigit){
            $maxDigit = $i;
            $count = 1;
        }
        else if ($i == $maxDigit){
            $count++;
        }
        else continue;
    }
    return $count;
}

function readArray()
{
    echo "Введите числовую последовательность через пробелы".PHP_EOL;
    echo "Если хотите оставновится - введите stop и нажмите Enter".PHP_EOL;
    $arr = trim(fgets(STDIN));
    $arr = explode(' ', $arr);
    foreach ($arr as &$index)
    {
        $index = readFromConsole($index);
    }
    unset($index);
    if (end($arr) == NULL)
        array_pop($arr);
    return $arr;
}

$arr = [1, 3, 3, 1];
$result = maxAmount($arr);
assertEquals(2,$result,"test: 2");

$arr = [1, 3, 3, 5, 5, 7, 5];
$result = maxAmount($arr);
assertEquals(1,$result,"test: 1");

$arr = [1, 4, 1, 4, 1, 2, 1];
$result = maxAmount($arr);
assertEquals(2,$result,"test: 2");

$arr = readArray();
$result = maxAmount($arr);
echo "Кол-во повторений наибольшего числа: {$result}";