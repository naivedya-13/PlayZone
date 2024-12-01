<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Check if the required fields are set 
    if (isset($_POST["username"], $_POST["name"], $_POST["email"], 
$_POST["password"])) { 
        // Get the form data 
        $username = trim($_POST["username"]); 
        $name = trim($_POST["name"]); 
        $email = trim($_POST["email"]); 
        $password = trim($_POST["password"]);         
 
        // Validate the form data (e.g., check if fields are not empty) 
 
        $servername = "localhost"; 
        $db_username = "root"; 
        $db_password = ""; 
        $db_name = "contact_form_db"; 
 
        // Create a connection 
        $conn = new mysqli($servername, $db_username, $db_password, 
$db_name); 
 
        // Check connection 
        if ($conn->connect_error) { 
            die("Connection failed: " . $conn->connect_error); 
        } 
 
        // Insert data into the database 
        $sql = "INSERT INTO contact_messages (name,email, 
PASSWORD,username) VALUES ('$name', '$email', '$password', '$username')"; 
        if ($conn->query($sql) === TRUE) { 
            header("Location: index.php"); 
            exit(); 
        } else { 
            echo "Error: " . $sql . "<br>" . $conn->error; 
        } 
 
        $conn->close(); 
    } else { 
        echo "One or more required fields are missing"; 
    } 
} else { 
    echo "Form submission method not allowed"; 
} 
?>