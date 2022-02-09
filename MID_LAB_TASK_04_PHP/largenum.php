<?php

echo "problem 4"."\n"; 

$num1 = 4;
$num2 = 5;
$num3 = 6;

echo " here is given three numbers :"."\n".$num1."\n".$num2."\n".$num3."\n";

if( $num1> $num2 && $num1> $num3)
{
	echo $num1 . " is the largest number";
}
else if($num2> $num3 && $num2> $num1)

	echo $num2 . " is the largest number";
else
	echo $num3 . " is the largest number";

?>