<?php
$db =mysqli_connect('localhost', 'root', '', 'dodi') or die("connection fail");
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
$username =mysqli_real_escape_string($db,$_POST['username']);
$email =mysqli_real_escape_string($db,$_POST['email']);
$password =mysqli_real_escape_string($db,$_POST['password']);
$password2 =mysqli_real_escape_string($db,$_POST['password_2']);

if ($password===$password2) {
     $sql = "INSERT INTO arriere (username, email,password) VALUES (?, ?, ?)";
     //Prepare statement
      $stmt = $db->prepare($sql);
      $stmt->bind_param("sss", $username, $email, $password);
      $stmt->execute();
			header("location:login.php");

	}
	else {
		echo "<script>The Two Passwords Are Matching</script>";
	}
}
?>
