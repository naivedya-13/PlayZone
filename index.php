<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title> Login Page </title> 
    <link rel="stylesheet" href="style1.css"> 
</head> 
<body> 
    <section> 
        <div class="leaves"> 
            <div class="set"> 
                <div><img src="leaf_01.png"></div> 
                <div><img src="leaf_02.png"></div> 
                <div><img src="leaf_03.png"></div> 
                <div><img src="leaf_04.png"></div> 
                <div><img src="leaf_01.png"></div> 
                <div><img src="leaf_02.png"></div> 
                <div><img src="leaf_03.png"></div> 
                <div><img src="leaf_04.png"></div> 
            </div> 
        </div> 
        <img src="bg.jpg" class="bg"> 
        <img src="girl.png" class="girl"> 
        <img src="trees.png" class="trees"> 
        <div class="login"> 
            <h2>Sign In</h2> 
            <form action="loginn.php" method="POST"> 
                <div class="inputBox"> 
                    <input type="text" name="username" placeholder="Username"> 
                </div> 
                <div class="inputBox"> 
                    <input type="password" name="password" 
placeholder="Password"> 
                </div> 
                <div class="inputBox"> 
                    <input type="submit" value="Login" id="btn"> 
                </div> 
            </form> 
            <div class="group"> 
                <a href="indexx.php">Signup</a> 
            </div> 
        </div> 
         
    </section> 
</body> 
</html> 