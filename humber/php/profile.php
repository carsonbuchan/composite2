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
        
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		 
	</title>
	<link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Pacifico" rel="stylesheet">
</head>
<body>

    <div class="hero">
		<nav>
            <a href="../php/browse.php"  class="col-1"><img src="../image/SVG/Logo.svg" id="logo" alt="logo"></a>
        </nav>
        <div class="container">
        <main>
            <div class="mainInfo col-6">
                <div id="photo">
                    <img src="../image/backgrounds/house.png" id="house" alt="House">
                </div>
            <?php
                include "connection.php";

                //starts session

                //creates a session named "userName"
                $user=$_SESSION["userName"];


                /*SQL select statement. This particular statement is used to pull 
                all the data from the users table for the logged in user
                */
                $sql="SELECT * FROM users WHERE userN='$user'";

                //mysqli_query function is used to execute a query
                $result=mysqli_query($con,$sql);

                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<h1 class='headingMsg'>". $row['fname'] . " " . $row['lname'] . "</h1>";

                    echo "<h2 class='titleImp'>Name: " . $row['fname'] . " " . $row['lname']."</h2>";
                    echo "<h2 class='titleImp'>Username: " . $row['userN'] . "</h2>";
                    echo "<h2 class='titleImp'> Email: " . $row['email'] . "</h2>";
                }
            ?>
            
                <?php
                    echo "<a href='updateForm.php'><img src='../image/SVG/update.svg' id='update' alt='Update Info'></a>&nbsp;&nbsp;&nbsp;";

				    echo "<a href='logout.php'><img src='../image/SVG/signout.svg' id='logout'> </a>";

                    mysqli_close($con);
                ?>
             </div>     
        </main>
        </div>
        <footer>
        <?php  
           include "../includes/footer.php"; 
		?>
        </footer>
    </div>
</body>
</html>