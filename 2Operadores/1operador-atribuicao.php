<?php

$amount = 200.00;
$valueA = $amount;

//$amount /= 2; //100
$discount = 33;
$formula = $discount / 100;

$valueA *= $formula;
$amount -= $valueA;

echo $amount;