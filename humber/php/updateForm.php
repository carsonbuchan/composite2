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
	<title>Update Folder</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald|Pacifico" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" type="text/css" href="../css/update.css">
</head>
<body>
    <div class="hero">
    <nav>
        <?php 
            include "../includes/nav.php"
        ?>
    </nav>
	<?php
		include "connection.php";
        


			$userN=$_SESSION["userName"];

			$sql="SELECT * FROM users where userN='$userN'";

			$result=mysqli_query($con,$sql);


			while($row=mysqli_fetch_assoc($result))
			{
				$firstName=$row['fname'];
				$lastName=$row['lname'];
				$email=$row['email'];
                
             }
	   ?>
        <div class="updateForm col-6">
            <img src="../image/backgrounds/house.png">
            <form method="POST" action="update.php">

                <label> First Name</label>
                <input type="text" name="fName" id="fName" value=<?php echo $firstName; ?> > <br><br>

                <label> Last Name</label>
                <input type="text" name="lName" id="lName" value=<?php echo $lastName; ?>> <br><br>

                <label> Email </label>
                <input type="text" name="eMail" id="eMail" value=<?php echo $email; ?>> <br><br>

                <input type="image" src="../image/SVG/update.svg" id="update" alt="Update" value="Submit">
            </form>
        </div>
        <footer>
            <?php
            include "../includes/footer.php"
            ?>
        </footer>
    </div>
</body>
</html>