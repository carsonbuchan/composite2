<?php


		//extract form values and assign to regular PHP variables
		$fname=$_POST['fname'];	
		$lname=$_POST['lname'];
		$userN=$_POST['userN'];
        $email=$_POST['email'];
		//md5 is an encrypting function that encrypts your data

		$password_1= md5($_POST['passW']);

			/*
			1. Connect to the database server
			2. select the database that we want to query
			3. Execute your SQL statement ( INSERT, SELECT, UPDATE OR DELETE)
			4. Close the connection

		*/
      
        
		include "connection.php";

        $sql="INSERT INTO users (fname,lname,sex,city,userN,password,email,dateCreated)
        VALUES('$fname','$lname','$sex','$city','$userN','$password_1','$email',now())";

        $fullname="$fname $lname";

        if(mysqli_query($con,$sql))
        {
            
            //create SESSION
        	session_start();//this tells the server you are about to start using sessions

        	 $_SESSION["userName"]=$userN;// this assigns the usernameof the user to the session variable called userName

        	//redirect user to booking.php page
        	header("Location:browse.php");

             
        }
        else
        {
        	echo "Sorry, your command did not execute due to ". mysqli_error($con);
        }

        mysqli_close($con);


?>