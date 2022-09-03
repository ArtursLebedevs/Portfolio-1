<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$id = $_SESSION["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beavertraveldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM users WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
  session_destroy();
  header("location: login.php");
  exit();
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>