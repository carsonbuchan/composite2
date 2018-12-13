<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/room.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Pacifico" rel="stylesheet">

    <title>Room</title>
</head>

<body>
    <?php        
       session_start();
       if(!isset($_SESSION["userName"]))
       {
           header("Location:../index.php");
       }
    include "connection.php";
    ?>

    

    <div class="hero">
        <nav>
            <?php 
                include "../includes/nav.php"
            ?>
            <a href="../php/logout.php"><img src="../image/SVG/logout.svg" id="logout" alt="Logout"></a>
        </nav>
        <div class="container">
            <main>
                <?php
                    $roomID=$_GET['id'];
                    $sql="SELECT * FROM rooms WHERE roomid='$roomID'";
                    $result=mysqli_query($con,$sql);

                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<div class='imageHolder'>";
                        echo "<img src='" . $row['img_path_lg'] . "' alt='Room 1' class='col-6' id='roomLg'>";
                        echo "<h1 class='title col-6'>" . $row['title'] . "</h1>";
                        echo "<p class='content col-6'>" . $row['description'] . "</p>";
                        echo "</div>";
                    }
                ?>
                <!-- PRICE -->
                <?php
                    $roomID=$_GET['id'];
                    $sql="SELECT * FROM rooms WHERE roomid='$roomID'";
                    $result=mysqli_query($con,$sql);
                
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<div class='costContainer col-6'>";
                        echo "<h1 class='title cost col-6'>Cost</h1>";
                        echo "<p class='price col-4'> $" .$row['price'] ."/Night </p>";
                        echo "<div class='nightsStaying'>";
                        echo "<p>Book Nights</p>";
                        echo "<p class='priceTotal col-6'>$" . $row['price'] . "</p>";
                        echo "<input onchange='addNights()' class='nightsStayingInput' type='number' value='1'>";
                        echo "</div>";
                        echo "</div>";
                    }
                ?>
            </main>
            <a href="#"><img src="../image/SVG/book.svg" class="col-12" id="booking" alt="Book"></a>
        </div>
    </div>
<script src="../js/script.js"></script>
</body>
</html>
