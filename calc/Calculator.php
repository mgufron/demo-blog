<?php
class Calculator
{
	private $lastNumber=0;
	public function __construct($number=0)
	{
		return $this->lastNumber = $number;
	}
	public function plus($number)
	{
		if(!empty($number))
		{
			if(is_int($number))
			{
				return $this->lastNumber += $number;
			}
		}
	}
	public function minus()
	{
		if(!empty($number))
		{
			if(is_int($number))
			{
				return $this->lastNumber -= $number;
			}
		}
	}
	public function multiple()
	{
		if(!empty($number))
		{
			if(is_int($number))
			{
				return $this->lastNumber *= $number;
			}
		}
	}
	public function divide()
	{
		if(!empty($number))
		{
			if(is_int($number))
			{
				return $this->lastNumber /= $number;
			}
		}
	}
	public function __toString()
	{
		return $this->lastNumber;
	}
	public function reset()
	{
		return $this->lastNumber = 0;
	}
}