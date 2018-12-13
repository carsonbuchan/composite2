<?php 


        /*This code test to see if the SESSION the session doesn't exists
            This code is necessary because it makes the page secure by prohibting
            vistors who are not authenticated/logged in, to the access the page
            If the user is not logged they will be re-directed to the home page.
        */
        session_start();
        if(!isset($_SESSION["userName"]))
        {
            header("Location:../index.php");
        }
        


        /*EXTRACT FORM VALUES*/


		$fName=$_POST['fName'];	
		$lName=$_POST['lName'];
        $userN=$_SESSION["userName"];

        include "connection.php";

        $sql="UPDATE USERS SET fname ='$fName', lname='$lName' WHERE userN='$userN'";


        if(mysqli_query($con,$sql))
        {
            
        	//redirect user to profile.php page
        	header("Location:profile.php");

             
        }
        else
        {
        	echo "Sorry, your command did not execute due to ". mysqli_error($con);
        }

        mysqli_close($con);


?>