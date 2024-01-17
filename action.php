<?php

$serverame = "localhost";
$username = "username";
$password = "password";
$dataBase = "jb_web";

// Create connection
$conn = new mysqli($servername, $username, $password,$dataBase);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



// if (isset($_POST['name'], $_POST['email'],$_POST['password'])) {
// 	$name = $_POST['name'];
// 	$email = $_POST['email'];
// 	$password = $_POST['password'];

// 	echo "Full Name: <strong>$name</strong>.<br>";
// 	echo "Email: <strong>$email</strong>. <br>";
// 	echo "Password: <strong>$password</strong> .";
// } else {
// 	echo 'You need to provide your name and email address.';
// }

