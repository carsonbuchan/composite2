<!DOCTYPE html>
<html>
<head>
	<title>Comp-2 Airbnb</title>
    <link type="text/css" href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Pacifico" rel="stylesheet">
 </head>
<body>
    <div class="loginHero">
        <nav class="signinNavContainer">
            <a href="php/registerForm.php"><img src="image/SVG/signup.svg" class="col-12" id="signUp"> </a>
        </nav>
        <div class="loginFormContainer col-2">
            <div class="loginFormContent">
                 <div class="errorContainer"> 
                <?php

                  session_start();

                  if(isset($_SESSION['error']))
                   {
                     echo $_SESSION['error'];
                     unset($_SESSION['error']);
                   }
                ?>
                </div>
            <form method="POST" action="php/authenticate.php">

                <label>UserName</label>
                <input type="text" name="userN" id="lUserName"><br><br>

                <label>Password</label>
                <input type="password" name="lPassW" id="lPassW"> <br><br>

                <input type="image" src="image/SVG/signin.svg" id="loginSignIn" name="registerBut" value="submit">

            </form>
            </div>
        </div>
    </div>
</body>
</html>