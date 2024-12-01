<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Contact Messages </title> 
    <link rel="stylesheet" href="style.css"> 
</head> 
 
<body> 
    <video autoplay muted loop id="myVideo"> 
        <source src="bg.mp4" type="video/mp4"> 
    </video> 
 
    <div class="container"> 
        <div class="label"> 
            <h1> Sign Up !!</h1> 
            <h2> You are just one step away from us</h2> 
        </div> 
        <form action="process_form.php" id="contactForm" method="POST"> 
    <div class="alert">Your message sent</div> 
    <div class="alert1">Your message not sent</div> 
 
    <div class="inputBox"> 
        <input type="text" id="username" name="username" placeholder="Your 
username"> 
    </div> 
 
    <div class="inputBox"> 
        <input type="text" id="name" name="name" placeholder="Your 
name...."> 
    </div> 
 
    <div class="inputBox"> 
        <input type="email" id="emailid" name="email" placeholder="Your 
Email....."> 
    </div> 
 
    <div class="inputBox"> 
        <input type="password" id="password" name="password" 
placeholder="Your password.."> 
    </div> 
 
    <div class="inputBox"> 
        <button type="submit">Submit</button> 
    </div> 
</form> 
 
    </div> 
</body> 
 
</html>