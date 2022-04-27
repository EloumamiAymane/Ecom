<?php
session_start();
$_SESSION['LoginOrNot']=false;
session_regenerate_id(FALSE);
session_unset();

if (session_status() == PHP_SESSION_NONE) {
    echo 'none';
}else{
    echo 'suuui';
}
header("location: login.php");
$_SESSION['LoginOrNot']=false;

?>