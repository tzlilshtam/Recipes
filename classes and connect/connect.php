<?php
include_once ('recipe.php');
include_once ('recipe_user.php');

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connection Succeed";
$InstrumentDB = new recipe($conn);
$InstrumentUserDB = new recipe_user($conn);



?>
