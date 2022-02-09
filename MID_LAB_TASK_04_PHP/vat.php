<?php

echo "problem 2"."\n"; 

$amount = 500;
$vat = 15;
$calculatevat = ( $amount / 100) *$vat;

$totalamount = $amount+ $calculatevat;



echo "Calculated amount with vat : ". $totalamount. "\n";


?>