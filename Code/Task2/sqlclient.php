<?php
$server = $_POST['server'];
$user = $_POST["user"];
$pass = $_POST['pass'];
$db = $_POST["area"];
$dbname = $_POST["db"];

$conn = new mysqli($server, $user, $pass);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";


// Create database
$sql = $db;
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "database already created " ;
}

$conn = new mysqli($server, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = $db;
if ($conn->query($sql) === TRUE) {
  echo "Completed successfully";
  echo "<br>";
  echo $db;
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>