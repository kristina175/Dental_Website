<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regjistrohu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $emri = $_POST['emri'];
    $email = $_POST['email'];
$password = $_POST['password'];
$Konfirmo = $_POST['Konfirmo'];

$sql = "insert into regjistrohu values( '$emri', '$email', '$password', '$Konfirmo')";

try{
if ($conn->query($sql) == true) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
catch(Exception $ex){
echo $ex->getMessage();
}
?>