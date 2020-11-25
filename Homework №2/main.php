<?php


require_once "readFromConsole.php";

function assertEquals($expected, $received, $message)
{
    if ($expected === $received) {
        echo $message . " - passed" . PHP_EOL;
    } else {
        echo $message . " - failed" . PHP_EOL;
    }
}

echo "Проверка функции Read_from_console на правильность исполнения" . PHP_EOL;
echo "В конце программы можно проверить корректность ввода через консоль" . PHP_EOL;

$result = readFromConsole("true");
assertEquals(true, $result, "test: true");

$result = readFromConsole("false");
assertEquals(false, $result, 'test: false');

$result = readFromConsole("1");
assertEquals(1, $result, "test: 1");

$result = readFromConsole("2");
assertEquals(2, $result, "test: 2");

$result = readFromConsole("2.56");
assertEquals(2.56, $result, 'test: 2.56');

$result = readFromConsole("test");
assertEquals("test", $result, "test: test");

$result = readFromConsole("!stop");
assertEquals(null, $result, "test: null");

$a = readFromConsole(trim(fgets(STDIN)));
var_dump($a);

