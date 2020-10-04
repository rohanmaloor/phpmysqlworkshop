<html>
<form action='q1_md5.php' method='POST'>
	<h3>Enter the marks out of 100</h3><br>
	Enter login ID: <input type='text' name='login'><br><br>
	Enter password: <input type='text' name='password'><br><br>
	<input type="submit" value="Save"><br>
</form>


</html>


<?php
require("connect.php");

@$login_id = $_POST['login'];
@$pass = $_POST['password'];

$passenc = md5($pass);

$write = "INSERT INTO data1 (login_id, password) VALUES ('$login_id', '$passenc')";


if (($login_id||$pass)==0) {
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