<?php 
include("loginserv.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>
	<div class="login">
		<h1 style="margin-left: 35%">LOGIN</h1>

		<form action="" method="post" style="text-align: center;">
		<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
		<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
		<input type="submit" value="LOGIN" name="submit">
		<span><?php echo $error; ?></span> <!-- error massage-->
	</div>
	
</body>
</html>