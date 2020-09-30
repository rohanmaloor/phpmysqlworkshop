<?php

function swap($n1,$n2){
	$t = $n1;
	$n2 = $n1;
	$n1 = $t;
}

$n1 = 10;
$n2 = 20;
swap($n1,$n2);
echo "$n1 $n2";
swap($n1,$n2);
echo "$n1 $n2";


?>