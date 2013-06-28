<?php
include 'Calculator.php';
$calculator = new Calculator(10);
print $calculator->plus(20)->minus(25)->divide(3)->multiple(20);