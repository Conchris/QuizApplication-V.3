<?php
session_start();
$db =mysqli_connect('localhost', 'root', '', 'dodi') or die("connection fail");
if(isset($_POST['login'])){
  $email =$_POST['email'];
  $password =$_POST['password'];
  $conn="SELECT * FROM arriere WHERE email='".$email."' AND password='".$password."' LIMIT 1";
  $result=mysqli_query($db,$conn);

  if (mysqli_num_rows($result)==1){
    echo "You are succesfully logged in";
    $_SESSION['username']=$username;
    header("location:main.php");
    exit();
  }
  else{
    echo "<script> alert('Wrong E-mail or Password')</script>";
    exit();
  }
}
?>
