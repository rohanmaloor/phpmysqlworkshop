<html>
<form action='q2.php' method='POST'>
	<h3><br>Update marks</h3><br>
	Enter name of student
	<input type="text" name="newname"><br>
	Enter marks for subject 5
	<input type="text" name="sub5new"><br>
	<input type="submit" value="Update"><br>
</form>


</html>

<?php

require("connect.php");

@$new_name = $_POST['newname'];
@$new_sub5 = $_POST['sub5new'];
$stored_data = "SELECT sub1, sub2, sub3, sub4, sub5, total_obtained, percentage FROM class1 WHERE name = '$new_name'";

if ($exe = mysqli_query($conn,$stored_data)) 
{
	while (	$row = mysqli_fetch_assoc($exe)) 
	{
		$marks1 = $row['sub1'];
		$marks2 = $row['sub2'];
		$marks3 = $row['sub3'];
		$marks4 = $row['sub4'];
		$marks5 = $row['sub5'];
		$sum = $row['total_obtained'];
		$perc = $row['percentage'];

		echo "<br><br>Name: $new_name<br>Subject1: $marks1<br>Subject2: $marks2<br>Subject3: $marks3<br>Subject4: $marks4<br>Subject5: $marks5<br>Total marks: $sum<br>Percentage: $perc %";
	}
} else {
	echo "Failed to fetch";
}

@$sum_new = ($marks1+$marks2+$marks3+$marks4+$new_sub5);
$perc_new = (($sum_new/500)*100);
$update_data1 = "UPDATE class1 SET sub5 = $new_sub5 WHERE name = '$new_name'";

$update_data2 = "UPDATE class1 SET total_obtained = $sum_new WHERE name = '$new_name'";

$update_data3 = "UPDATE class1 SET percentage = $perc_new WHERE name = '$new_name'";

$exe1 = mysqli_query($conn,$update_data1);
$exe2 = mysqli_query($conn,$update_data2);
$exe3 = mysqli_query($conn,$update_data3);

if ($exe2&&$exe2&&$exe3) {
	echo "<br><br>Record updated<br><br> Updated data is <br><br>Name: $new_name<br>Subject1: $marks1<br>Subject2: $marks2<br>Subject3: $marks3<br>Subject4: $marks4<br>Subject5: $new_sub5<br>Total marks: $sum_new<br>Percentage: $perc_new %";

} else {
	echo "<br>Error while updating";
}

$conn->close();		

?>