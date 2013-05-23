<?php
include 'Calculator.php';

$calculator = new Calculator(10);

$calculator->plus(10);

$calculator->divide(5);

print 'Hasil dari (10 + 10) /5 = '.$calculator;

$calculator->reset(100);

$calculator->multiple(4);


print '<br/>Hasil dari 100*4 = '.$calculator;