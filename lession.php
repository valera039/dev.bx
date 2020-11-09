<?php

require_once "function.php";

function assertEquals($expected, $received, $messenge){
    if ($expected == $received){
        echo $messenge." - passed\n";
    }
    else {
        echo $messenge." - failed\n";
    }
}

echo "Проверка функции Read_from_console на правильность исполнения\n";
echo "В конце программы можно проверить корректность ввода через консоль\n";

$result = Read_from_console("true");
assertEquals(true,$result,"test: true");

$result = Read_from_console("false");
assertEquals(false,$result,'test: false');

$result = Read_from_console("2");
assertEquals(2,$result,"test: 2");

$result = Read_from_console("2.56");
assertEquals(2.56,$result,'test: 2.56');

$result = Read_from_console("test");
assertEquals("test",$result,"test: test");

$result = Read_from_console("!stop");
assertEquals(null,$result,"test: null");

$a = Read_from_console(trim(fgets(STDIN)));
var_dump($a);
