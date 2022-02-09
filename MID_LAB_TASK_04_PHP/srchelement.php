<?php

echo "problem 6"."\n"."<br>"; 


$element = array(1, 'shjh', 3.2, 'jsd');

$num = 2;
echo " find ". $num."no element from the array "."\n"."<br>";


for( $i=0; $i< 4; $i++ )
{

	if($i == $num)
	{

	echo $element[$i] . " is the value of ". $num. "no element";
	

	}
	
}


?>