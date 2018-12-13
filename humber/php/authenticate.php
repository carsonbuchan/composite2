<?php

	$userName=$_POST['userN'];
	$passW=md5($_POST['lPassW']);

	include "connection.php";

	$sql="SELECT * FROM users WHERE userN='$userName' AND password='$passW'";

	$result=mysqli_query($con,$sql);

	$num_rows=mysqli_num_rows($result);

	if($num_rows==1)
	{
		session_start();

		$_SESSION["userName"]=$userName;


		mysqli_close($con);
		header("Location:browse.php");
	}

	else
	{
		session_start();
        $_SESSION['error']="Sorry, your username and/or password is inccorrect";
        header("Location:../index.php");
	}
	

?>