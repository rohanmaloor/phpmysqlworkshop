<html>
<form action='q6_2_special_variables_html.php' method='POST'>
	<h3>Enter the marks out of 100</h3><br>
	<input type="label" value="Name of student">
	<input type='text' name='sname'><br><br>
	<input type="label" value="Subject 1">
	<input type='text' name='sub1'><br><br>
	<input type="label" value="Subject 2">
	<input type='text' name='sub2'><br><br>
	<input type="label" value="Subject 3">
	<input type='text' name='sub3'><br><br>
	<input type="label" value="Subject 4">
	<input type='text' name='sub4'><br><br>
	<input type="label" value="Subject 5">
	<input type='text' name='sub5'><br><br>
	<input type="submit" value="Click Here"><br>
</form>


</html>

<?php
$name = $_POST['sname'];
$s1 = $_POST['sub1'];
$s2 = $_POST['sub2'];
$s3 = $_POST['sub3'];
$s4 = $_POST['sub4'];
$s5 = $_POST['sub5'];
@$sum = ($s1+$s2+$s3+$s4+$s5);
$perc = (($sum/500)*100);

if ($name) {
	echo "Name of student: $name<br>";
	echo "Subject 1 marks: $s1<br>";
	echo "Subject 2 marks: $s2<br>";
	echo "Subject 3 marks: $s3<br>";
	echo "Subject 4 marks: $s4<br>";
	echo "Subject 5 marks: $s5<br>";
	echo "Total marks obtained: $sum<br>";
	echo "Total marks: 500<br>";
	echo "Percentage: $perc%";
}


?>