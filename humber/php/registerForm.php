<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
     <link type="text/css" href="../css/styles.css" rel="stylesheet">
    <link type="text/css" href="../css/login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Pacifico" rel="stylesheet">
</head>
<body>
     <div class="loginHero">
        <nav class="loginNavContainer">            
            <a href="../index.php"><img src="../image/svg/signin.svg" id="regSignIn"></a>;
         </nav>
        <div class="registerFormContainer col-4">
            <div class="loginFormContent">
                
            <form method="POST" action="process.php">

            <label>First Name</label>
            <input type="text" name="fname" id="fname"> <br>

            <label>Last Name</label>
            <input type="text" name="lname" id="lname"> <br>

            <label>Email</label>
            <input type="test" name="email" id="email"> <br>    

            <label>UserName</label>
            <input type="text" name="userN" id="userName"><br>

            <label>Password</label>
            <input type="password" name="passW" id="passW"> <br>

            <label>Confirm Password</label>
            <input type="password" name="cpassW" id="cpassW"> <br><br>

            <input type="image" src="../image/SVG/signup.svg" id="signUp" name="registerBut" value="submit">


            </form>
            </div>
        </div>  
    </div>
</body>
</html>