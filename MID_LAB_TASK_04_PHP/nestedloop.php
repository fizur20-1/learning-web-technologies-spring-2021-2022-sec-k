<?php

echo "problem 7"."\n"."<br>"; 

for( $i=0 ; $i<4 ; $i++)
{
	for($j=0 ; $j<$i; $j++)
	{
		echo "* ";
	}
	echo "\n"."<br>";
}

echo "\n"."<br>";

for( $i=0 ; $i<4 ; $i++)
{
	for($j=$i ; $j>=0; $j--)
	{
		echo "* ";
	}
	echo "\n"."<br>";
}


?>