<html>
<form action='q6_1_special_variables_html.php' method="GET">
	<input type="label" value="Enter Side 1">
	<input type='text' name='side1'><br><br>
	<input type="label" value="Enter Side 2">
	<input type='text' name='side2'><br><br>
	<input type="label" value="Enter Side 3">
	<input type='text' name='side3'><br><br>
	<input type="submit" value="Click Here"><br>
</form>


</html>

<?php
$a = $_GET['side1'];
$b = $_GET['side2'];
$c = $_GET['side3'];



if ($a && $b && $c) {

	
	if (($a==$b) && ($a==$c) && ($b==$c))
	{
	echo "This is an equilateral triangle.";
	}
	elseif (($a==$b) || ($a==$c) || ($b==$c))
	{
	echo "This is an isosceles triangle.";
	}
	else{
		if (($a>$b) && ($a>$c))
		{	$l = $a;
			$temp = (($b*$b)+($c*$c));
			$m = sqrt($temp);
			//echo $m;
		}

	if (($b>$a) && ($b>$c))
		{	$l = $b;
			$temp = (($a*$a)+($c*$c));
			$m = sqrt($temp);
			//echo $m;
		}

	if (($c>$b) && ($c>$a))
		{	$l = $c;
			$temp = (($b*$b)+($a*$a));
			$m = sqrt($temp);
			//echo $m;
		}

		if ($l==$m) 
		{
			echo "This is a right triangle.";
		}
		else{
			echo "This is a scalene triangle.";
		}
		
	}

}

?>