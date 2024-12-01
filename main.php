<?php 
session_start(); 
 
// Check if the user is logged in 
if (isset($_SESSION['username'])) { 
    $userName = $_SESSION['username']; 
} else { 
    // Redirect to the login page if not logged in 
    header("Location: index.php"); 
    exit(); 
} 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Welcome</title> 
    <link rel="stylesheet" href="main_design.css"> 
</head> 
 
<body> 
    <video autoplay muted loop id="myVideo"> 
        <source src="bg1.mp4" type="video/mp4"> 
    </video> 
    <nav class="nav"> 
        <i class="uil uil-bars navOpenBtn"></i> 
        <?php 
        // Assuming $userName contains the user's name fetched from the database 
        echo 'Hello   ' . $userName . ' !'; 
        ?> 
        <ul class="nav-links"> 
            <i class="uil uil-times navCloseBtn"></i> 
            <li><a href="main.php">Home</a></li> 
            <li><a href="index.php">Logout</a></li> 
            <li><a href="https://forms.gle/z7wqfihe5uqwEvNZ7">Contact 
Us</a></li> 
        </ul> 
        <i class="uil uil-search search-icon" id="searchIcon"></i> 
    </nav> 
    <div class="body1"> 
        <div class="container1"> 
            <a href="snake.php"> 
            <img id="img1" 
src="https://img1.ugamezone.com/201901/2019/0130/f6/c/303093/original.jp
 g" /> 
            </a> 
        </div> 
        <div class="container2"> 
            <a href="tic_tac_toe.php"> 
                <img id="img2" 
src="https://i.etsystatic.com/18390435/r/il/afc0b9/2230101434/il_fullxfull.223
 0101434_tsnw.jpg" /> 
            </a> 
        </div> 
        <div class="container3"> 
            <a href="paint.php"> 
                <img id="img3" src="https://9to5mac.com/wp
content/uploads/sites/6/2018/12/Linea-sketch-iPad-Pro-drawing
app.jpeg?quality=82&strip=all&w=1600" /> 
            </a> 
        </div> 
    </div> 
</body> 
 
</html>