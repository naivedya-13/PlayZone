<?php 
session_start(); 
 
// Check if the user is logged in 
if (isset($_SESSION['username'])) { 
    $userName = $_SESSION['username']; 
} else { 
    // Redirect to the login page if not logged in 
    header("Location: login.php"); 
    exit(); 
} 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Snake Game</title> 
    <link rel="stylesheet" href="css/style.css"> 
</head> 
<body> 
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
    <div class="body"> 
        <div id="scoreBox">Score: 0</div> 
        <div id="hiscoreBox">HiScore: 0</div> 
        <div id="board"></div> 
    </div> 
</body> 
<script src="js/index.js"></script> 
</html>