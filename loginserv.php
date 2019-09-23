<?php
$error=''; //variable to store error message

if (isset($_POST['submit'])) {
if (empty($_POST['user']) || empty($_POST['pass'])) {
	$error = "! USERNAME OR PASSWORD IS INVALID !";
}
else 
{
	//define $user and $pass
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$conn = mysqli_connect("localhost", "root", "");

	$db = mysqli_select_db($conn, "login");

	$query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");

	$rows = mysqli_num_rows($query);
	if ($rows == 1) {
		header("Location: welcome.php"); // redirecting to welcome page
	} 
	else 
	{
		$error = "! USERNAME OR PASSWORD IS INVALID !";
	}
	mysqli_close($conn); //closing connection
}
}

?>