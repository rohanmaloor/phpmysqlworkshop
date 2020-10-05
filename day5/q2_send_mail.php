<html>
<form action='q2_send_mail.php' method='POST'>
	<h3>Enter the marks out of 100</h3><br>
	Enter your name: <input type='text' name='uname'><br><br>
	Enter email ID: <input type='text' name='email'><br><br>
	Enter your feedback:<br> <textarea name='feedback' rows='4' cols='50'>
		Max length is 100 characters...
	</textarea><br><br>
	<input type="submit" value="Submit"><br>
</form>


</html>


<?php
require("connect.php");

@$admin_id = "maloorrohhe17ite@student.mes.ac.in";

@$user_name = $_POST['uname'];
@$user_id = $_POST['email'];
@$feed_back = $_POST['feedback'];


$write = "INSERT INTO feedback1 (name, email, feedback) VALUES ('$user_name', '$user_id', '$feed_back')";


if (($user_name||$user_id||$feed_back)==0) {
	echo "<br>Empty Fields";
} else{

	$exe = mysqli_query($conn,$write);
	if ($exe) {
		echo "<br>Feedback recieved";
	} else {
		echo "<br>Error: " . $write . "<br>" . $conn->error;
	}

	$subject_user = "Feedback recieved from the feedback page";
	$body_user = "Thank you <html><b>$user_name</b></html> for your feedback!";
	$header_user = "From: rohanmaloor@gmail.com";

	$body_admin = "The feedback from <html><b>$user_name</b></html> is:    $feed_back";
	$admin_id = "maloorrohhe17ite@student.mes.ac.in";
	$subject_admin = "Feedback recieved";
	$header_admin = "From: $user_id";

	$user_mailed = mail($user_id, $subject_user, $body_user, $header_user);
	$admin_mailed = mail($admin_id, $subject_admin, $body_admin, $header_admin);

	if($user_mailed||$admin_mailed)
	{
		echo "<br><br>Email has been sent";
	}

}

$conn->close();

?>