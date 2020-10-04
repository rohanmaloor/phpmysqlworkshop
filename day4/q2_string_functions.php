<html>

<form action='q2_string_functions.php' method='POST'>
	<h3>Enter a string</h3>
	<input type='text' name='ipstr'><br><br>
	<input type="submit" value="Click here"><br>
</form>

</html>


<?php

@$string = $_POST['ipstr'];
$len = strlen($string);
$arr = explode(" ", $string);
$rev = strrev($string);
$up = strtoupper($string);
$low = strtolower($string);
$repl = str_replace("is", "was", $string);


if ($string) {
	echo "Number of characters in the string = $len <br><br>";
	echo "Array created from the string = ";
	foreach ($arr as $value) {
		echo "$value, ";
	};	
	echo "<br><br>Reverse of the string = $rev <br><br>";
	echo "Lower case the string = $up <br><br>";
	echo "Upper case the string = $low <br><br>";
	echo "Replacing is with was in the string = $repl <br><br>";
	
}


?>