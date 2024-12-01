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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>X/O</title> 
    <link rel="stylesheet" href="tic.css"> 
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
    <section> 
        <h1 class="game--title">Tic-Tac-Toe Game</h1> 
        <div class="game--container"> 
            <div data-cell-index="0" class="cell"></div> 
            <div data-cell-index="1" class="cell"></div> 
            <div data-cell-index="2" class="cell"></div> 
            <div data-cell-index="3" class="cell"></div> 
            <div data-cell-index="4" class="cell"></div> 
            <div data-cell-index="5" class="cell"></div> 
            <div data-cell-index="6" class="cell"></div> 
            <div data-cell-index="7" class="cell"></div> 
            <div data-cell-index="8" class="cell"></div> 
        </div> 
        <h2 class="game--status"></h2> 
        <button class="game--restart">Restart Game</button> 
    </section> 
    <script src="tic.js"></script> 
</body> 
</html>