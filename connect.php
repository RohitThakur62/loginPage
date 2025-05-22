<?php
$hostname = '127.0.0.1:4306'; // Use correct port and IP
$username = 'root';
$password = '';
$database = 'signupforms';

// Create database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
// else {
//     echo "Connection successful";
// }


?>
