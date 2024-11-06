     

<?php
// Define the variables
$severname = 'localhost'; // or your database host
$username = 'root'; // your database username
$password = ''; // your database password
$database = 'userin'; // your database name

// Create connection
$conn = new mysqli($severname, $username, $password, $database,3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>





