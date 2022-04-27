<?php
include '../connection.php';
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $tel = $_POST['tel'];
    $comments = $_POST['comment'];
    $id=$_SESSION['id'];
    if (!empty($name) && !empty($mail) && !empty($tel) && !empty($comments)) {
        $sql = "INSERT INTO `contact` (`idclient`,`name`,`email`,`telephone`,`comments`)
     VALUES  ('$id','$name','$mail','$tel','$comments')";
        try {
            $rqt = $conn->query($sql);
        } catch (PDOEXception $e) {
            $error_cnx = $e->getMessage();
            echo "<br><br>" . $error_cnx;
            exit();
        }
        $_SESSION['message'] = "Thanks for contacting us. We'll get back to you as soon as possible.";
    } else {
        $_SESSION['messErr'] = "Veuillez Remplir tout les Champs!!";
    }
    header('location: Contact.php');
}
