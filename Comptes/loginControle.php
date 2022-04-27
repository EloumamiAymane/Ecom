<?php
$connection = new mysqli('localhost', 'root', NULL, 'projet-ecomm') or die(mysqli_error($connection));
$_SESSION['foundINFO'] = true;
$_SESSION['LoginOrNot'] = false;

if (isset($_POST['login'])) {

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    $passwordEncrypted = openssl_encrypt($password, "AES-128-ECB", $username);

    $infoACCOUNT = $connection->query(" SELECT * FROM client WHERE username='$username' AND password='$passwordEncrypted' ") or die(mysqli_error($connection));
    $result = $infoACCOUNT->fetch_assoc();
    
    $_SESSION['disabledAccount'] =true;

    if ($result == NULL) {
        $_SESSION['foundINFO'] = false;
    }else {
        $alertNumber = $result['Alert'];
        if($alertNumber<3){
            $_SESSION['disabledAccount'] = true;
              $_SESSION['id']=$result['id'];
                $_SESSION['LoginOrNot'] = true;
                header("location: ../HOME/home.php");

        }else{
            $_SESSION['disabledAccount'] = false;
        }
    }
}
