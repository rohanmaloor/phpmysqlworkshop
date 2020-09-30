<?php

$nos = array(11,23,72,44);


for ($x=0; $x <4 ; $x++) { 
	if (($nos[$x]%2) == 0)
		{
			echo "The number $nos[$x] is even number";
		}
	else 
		{
			echo "The number $nos[$x] is odd number";
		}

}

?>