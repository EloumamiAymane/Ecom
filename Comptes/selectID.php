<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$connection = new mysqli('localhost','root',NULL,'projet-ecomm') or die(mysqli_error($connection));

$username=$_SESSION['username'];
$password=$_SESSION['password'];
echo $password;
$rqt=$connection->query(" SELECT * FROM client WHERE  username='$username' AND password='$password' ") or die(mysqli_error($connection));
$row = mysqli_fetch_assoc($rqt);    
$_SESSION['id']=$row['id'];

header("location: ../HOME/home.php");