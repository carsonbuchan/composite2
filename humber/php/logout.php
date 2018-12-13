<?php


        //Test to see if the SESSION exists and destorys the session if it is

        session_start();
        if(isset($_SESSION["userName"]))
        {
            unset($_SESSION["userName"]);
            echo "<script> alert(\"THank you, you have been logged out\"); </script>";
            header("Location:../index.php");
        }
        else
        {
            header("Location:../index.php");
        }


?>