<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="../css/browse.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Pacifico" rel="stylesheet">
    <title></title>
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
            <header>
                <img src="../image/backgrounds/torontoskyline.jpg" alt="Toronto Skyline" id="toronto">
            </header>
             
            <main class="roomContainer">
                <section class="room col-12">                        
                        <?php
                            $sql="SELECT * FROM rooms";

                            $result=mysqli_query($con,$sql);

                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo "<div class='box col-3''>";
                                echo "<img src='" . $row['img_path_sm'] . "'class='imgSmall'>";

                                echo "<a href='room.php?id=".$row['roomid']. "'class='imgSmall'>" . $row['title']."</a>";
                                echo "<p>$" . $row['price'] . " per night</p>";
                                echo "</div>";
                            }
                        ?> 
                </section>    
            </main>
        </div>
        <div id="footerFix"></div>
        <footer id="footerContainer">
            <?php
              include "../includes/footer.php"  
            ?>
        </footer>
    </div>
</body>
</html>
