<?php

class Chess{
    private $x1, $y1, $x2, $y2;

    public function setCoords($arr)
    {
        $this->x1 = $arr[0];
        $this->y1 = $arr[1];
        $this->x2 = $arr[2];
        $this->y2 = $arr[3];
    }

    public function getCoords()
    {
        return [
            $this->x1,
            $this->y1,
            $this->x2,
            $this->y2,
        ];
    }

    public function queenTurn()
    {
        $diff1 = abs($this->x1 - $this->x2);
        $diff2 = abs($this->y1 - $this->y2);
        if ($this->x1 == $this->x2 or $this->y1 == $this->y2 or $diff1 == $diff2) {
            return $answer = "YES";
        }
        return $answer = "NO";
    }
}

function assertEquals($expected, $received, $message)
{
    if ($expected === $received) {
        echo $message . " - passed" . PHP_EOL;
    }
    else {
        echo $message . " - failed" . PHP_EOL;
    }
}

function read()
{
    echo "Введите через запятую сначала координаты первой точки, потом коордитаты второй точки".PHP_EOL;
    $input = trim(fgets(STDIN));
    $input = explode(",",$input);
    foreach ($input as $i){
        $i = +$i;
    }
    return $input;
}

$chess = new Chess();

$chess->setCoords([1,2,3,6]);
$result = $chess->getCoords();
var_dump($result);
$result = $chess->queenTurn();
echo $result.PHP_EOL;

$arr = read();
var_dump($arr);
$chess->setCoords($arr);
$res = $chess->queenTurn();
echo $res.PHP_EOL;


$chords = [1,2,3,4];
$chess->setCoords($chords);
$result = $chess->queenTurn();
assertEquals("YES",$result,"test: YES");

$chords = [4,2,4,4];
$chess->setCoords($chords);
$result = $chess->queenTurn();
assertEquals("YES",$result,"test: YES");

$chords = [4,2,2,4];
$chess->setCoords($chords);
$result = $chess->queenTurn();
assertEquals("YES",$result,"test: NO");

$chords = [4,2,1,2];
$chess->setCoords($chords);
$result = $chess->queenTurn();
assertEquals("YES",$result,"test: YES");

$chords = [1,2,3,5];
$chess->setCoords($chords);
$result = $chess->queenTurn();
assertEquals("NO",$result,"test: NO");

$chords = [5,6,7,5];
$chess->setCoords($chords);
$result = $chess->queenTurn();
assertEquals("NO",$result,"test: NO");