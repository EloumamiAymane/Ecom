<?php 
    session_start();
    $connection = new mysqli('localhost','root',NULL,'projet-ecomm') or die(mysqli_error($connection));
    $_SESSION['LoginAdmin']=false;

        if(isset($_POST['login'])){

            $_SESSION['username'] = $_POST['username'];
             $_SESSION['password'] = $_POST['password'];
             $username = $_SESSION['username']; 
             $password = $_SESSION['password'];

            $infoACCOUNT = $connection->query(" SELECT * FROM adminlogin
            WHERE  userName='$username' AND password='$password' ") or die(mysqli_error($connection));

            $result = $infoACCOUNT->fetch_assoc();

            if($result==NULL){
              $_SESSION['foundINFO']=false;
            }else{
              $_SESSION['LoginAdmin']=true;
              header("location: ../admin/admin_page.php");
            }
        }
?>