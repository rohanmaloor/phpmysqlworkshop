<html>
<form action='q1.php' method='POST'>
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
	<input type="submit" value="Save"><br>
</form>


</html>


<?php
require("connect.php");

@$name = $_POST['sname'];
@$s1 = $_POST['sub1'];
@$s2 = $_POST['sub2'];
@$s3 = $_POST['sub3'];
@$s4 = $_POST['sub4'];
@$s5 = $_POST['sub5'];
@$sum = ($s1+$s2+$s3+$s4+$s5);
$total = 500;
$perc = (($sum/$total)*100);

$write = "INSERT INTO class1 (id, name, sub1, sub2, sub3, sub4, sub5, total_obtained, total_marks, percentage) VALUES ('', '$name', $s1, $s2, $s3, $s4, $s5, $sum, $total, $perc)";


if (($name||$s1||$s2||$s3||$s4||$s5)==0) {
	echo "<br>Empty Fields";
} else{

	$exe = mysqli_query($conn,$write);
	if ($exe) {
		echo "<br>New record created successfully";
	} else {
		echo "<br>Error: " . $write . "<br>" . $conn->error;
	}
}

$conn->close();

?>