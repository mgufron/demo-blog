<?php
/*
Calculator Class sederhana. Hanya untuk demo
@author Mochamad Gufron 
@link http://www.mgufron.com
*/
class Calculator
{
	/*
	@var $lastNumber untuk penyimpanan angka sementara dalam operasi kalkulator
	*/
	private $lastNumber=0;

	/*
	@method __construct Inisiasi angka awal yang akan digunakan
	@params 
		$number angka awal yang digunakan

	*/
	public function __construct($number=0)
	{
		return $this->lastNumber = $number;
	}

	/*
	@method plus digunakan untuk melakukan operasi penjumlahan
	@params 
		$number angka yang akan dijumlahkan
	*/
	public function plus($number)
	{
		return !empty($number) && is_int($number)?$this->lastNumber += $number:null;
	}

	/*
	@method plus digunakan untuk melakukan operasi pengurangan
	@params 
		$number angka yang akan dikurangkan
	*/
	public function minus($number)
	{
		return !empty($number) && is_int($number)?$this->lastNumber -= $number:null;
	}

	/*
	@method plus digunakan untuk melakukan operasi perkalian
	@params 
		$number angka yang akan menjadi pengali
	*/
	public function multiple($number)
	{
		return !empty($number) && is_int($number)?$this->lastNumber *= $number:null;
	}

	/*
	@method plus digunakan untuk melakukan operasi pembagian
	@params 
		$number angka yang akan menjadi pembagi
	*/
	public function divide($number)
	{
		return !empty($number) && is_int($number)?$this->lastNumber /= $number:null;
	}

	/*
	@method reset digunakan untuk reset angka terakhir menjadi 0
	*/
	public function reset($number=0)
	{
		return $this->__construct($number);
	}

	/*
	@method __toString digunakan untuk melihat hasil terakhir dari $lastNumber
	*/
	public function __toString()
	{
		return (string)$this->lastNumber;
	}
}
