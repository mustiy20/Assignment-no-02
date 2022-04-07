<?php
$server = $_POST['server'];
$user = $_POST["user"];
$pass = $_POST['pass'];
$db = $_POST["area"];
$dbname = $_POST["db"];

$conn = new mysqli($server, $user, $pass);

// Check connection
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
  else{
  echo "Connected successfully <br>";
  }

// Create database
if($dbname==""){
$sql = $db;
if ($conn->query($sql) === TRUE)
{
echo "Database created";
}
else
{
echo "Error creating database: " . mysql_error();
}
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
