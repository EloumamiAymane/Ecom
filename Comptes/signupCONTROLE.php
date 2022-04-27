<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    $connection = new mysqli('localhost','root',NULL,'projet-ecomm') or die(mysqli_error($connection));
    $_SESSION['redondanceDATA']=true;
    $_SESSION['LoginOrNot']=false;

    if(isset($_POST['signup'])){
                 
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['phone-Number'] = $_POST['phone'];
            $_SESSION['city'] = $_POST['city'];

            $username = $_SESSION['username'];
            $email = $_SESSION['email'];
            $password = $_SESSION['password'];
            $confirmPasswd = $_POST['confirmPasswd'];
            $phoneNumber = $_SESSION['phone-Number'];
            $city = $_SESSION['city'];




            $searchDATA = $connection->query("SELECT * FROM client WHERE username='$username'");
            $result = $searchDATA->fetch_assoc();

            if($result==NULL && $password==$confirmPasswd){
                $passwordEncrypted=openssl_encrypt($password,"AES-128-ECB",$username);

                $connection->query("INSERT INTO client (username,email,password,phoneNumber,city,Alert) VALUES ('$username','$email','$passwordEncrypted','$phoneNumber','$city',0)");
                
               
                $_SESSION['username']=$username;
                $_SESSION['password']=$passwordEncrypted;
              
                    echo $_SESSION['username'];


                $_SESSION['LoginOrNot']=true;

                header("location: selectID.php");

            }else{
                $_SESSION['redondanceDATA']=false;
            }
    }

    ?>