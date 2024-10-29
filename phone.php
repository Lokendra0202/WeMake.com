<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile";


$con = new mysqli($servername, $username, $password, $dbname);


if ($con->connect_error) {
    die("Connection failed: " );
}


$name = $_POST['name']; 
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];


$sql = "INSERT INTO `phone` (`name`, `email`, `message`, `number`) VALUES ('$name', '$email', '$message', '$number')";
if ($con->query($sql) === TRUE) {
    echo "New record added successfully";
} else {
    echo "Error: " ;
}

$con->close();
?>
