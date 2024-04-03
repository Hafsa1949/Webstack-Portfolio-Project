<?php
// Database configuration
$dbHost = 'sql1.revivenode.com:3306'; // Change this to your database host
$dbUsername = 'u8114_vHOGsBT7rA'; // Change this to your database username
$dbPassword = 'ItP=s45=z=sFJlk4O.PBsLDz'; // Change this to your database password
$dbName = 's8114_hafsaalx'; // Change this to your database name

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
