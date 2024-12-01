<?php 
// Database connection 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "contact_form_db"; 
 
$conn = new mysqli($servername, $username, $password, $dbname); 
 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
 
// Check if the form is submitted 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Get username and password from the form 
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
 
    // Query to check if the username and password match 
    $sql = "SELECT * FROM contact_messages WHERE username='$username' 
AND PASSWORD='$password'"; 
    $result = $conn->query($sql); 
 
    if ($result->num_rows > 0) { 
        // Redirect to success page if login is successful 
        session_start(); 
 
        $_SESSION["username"] = $username; 
 
 
        header("Location: main.php"); 
        exit(); 
    } else { 
        // Display error message if login fails 
        echo "Invalid username or password"; 
    } 
} 
 
$conn->close();