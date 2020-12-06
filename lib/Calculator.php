<?php

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

	public function squareRoot($a){
	    if ($a < 0)
	    {
            throw new \InvalidArgumentException('No square root of negative number');
	    }
        return sqrt($a);
    }

    public function exponentiation($a, $b)
    {
        return $a ** $b;
    }
}