<?php

$x = array(
	array(1,2),
	array(4,5)
);
$y = array(
	array(3,8),
	array(6,7)
);


for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $x[$i][$j]+$y[$i][$j]." ";
        }
        echo "<br>";
    }

?>