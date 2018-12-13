<?php
		
		$servername= "localhost";
		$username="root";
		$password="";
		$dbName="wddm113";

		//This line connects to the database server and returns a reference of the connection and assigns it to a variable call $con
		$con= mysqli_connect($servername, $username,$password);

		mysqli_select_db($con,"wddm113");


?>