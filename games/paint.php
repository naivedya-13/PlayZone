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
<html lang="en" dir="ltr"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Drawing App </title> 
    <link rel="stylesheet" href="paint.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="paint.js" defer></script> 
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
    <div class="container"> 
      <section class="tools-board"> 
        <div class="row"> 
          <label class="title">Shapes</label> 
          <ul class="options"> 
            <li class="option tool" id="rectangle"> 
              <img src="icons/rectangle.svg" alt=""> 
              <span>Rectangle</span> 
            </li> 
            <li class="option tool" id="circle"> 
              <img src="icons/circle.svg" alt=""> 
              <span>Circle</span> 
            </li> 
            <li class="option tool" id="triangle"> 
              <img src="icons/triangle.svg" alt=""> 
              <span>Triangle</span> 
            </li> 
            <li class="option"> 
              <input type="checkbox" id="fill-color"> 
              <label for="fill-color">Fill color</label> 
            </li> 
          </ul> 
        </div> 
        <div class="row"> 
          <label class="title">Options</label> 
          <ul class="options"> 
            <li class="option active tool" id="brush"> 
              <img src="icons/brush.svg" alt=""> 
              <span>Brush</span> 
            </li> 
            <li class="option tool" id="eraser"> 
              <img src="icons/eraser.svg" alt=""> 
              <span>Eraser</span> 
            </li> 
            <li class="option"> 
              <input type="range" id="size-slider" min="1" max="30" value="5"> 
            </li> 
          </ul> 
        </div> 
        <div class="row colors"> 
          <label class="title">Colors</label> 
          <ul class="options"> 
            <li class="option"></li> 
            <li class="option selected"></li> 
            <li class="option"></li> 
            <li class="option"></li> 
            <li class="option"> 
              <input type="color" id="color-picker" value="4A98F7"> 
            </li> 
          </ul> 
        </div> 
        <div class="row buttons"> 
          <button class="clear-canvas">Clear Canvas</button> 
          <button class="save-img">Save As Image</button> 
        </div> 
      </section> 
      <section class="drawing-board"> 
        <canvas></canvas> 
      </section> 
    </div> 
     
  </body> 
</html>