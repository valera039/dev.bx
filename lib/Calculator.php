<?php
//Calculator.php

class Calculator
{
	public function add($a, $b)
	{
		return $a + $b;
	}
	public function subtract($a, $b)
	{
		return $a - $b;
	}
	public function multiply($a, $b)
	{
		return $a * $b;
	}
	public function divide($a, $b)
	{
		if($b === 0)
		{
			throw new \InvalidArgumentException('Divider cant be a zero');
		}

		return $a / $b;
	}
	public function squareRoot($a)
    {
	    $a = sqrt($a);
	    return round($a,4);
    }
    public function exponentiation($a, $b)
    {
        return $a ** $b;
    }
}