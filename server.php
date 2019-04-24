<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	session_start();
$con = mysqli_connect('localhost','root','','dodi') or die("fail ");


	$username =mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password =mysqli_real_escape_string($con,$_POST['password']);

  echo $username;
	echo $email;
	echo $password;
  $password=md5($password);
	$q = "INSERT INTO arriere(username,email,password) VALUES ('$username','$email','$password')";
	mysqli_query($con,$q);
}
?>
