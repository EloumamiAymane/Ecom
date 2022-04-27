<?php

if (session_status() == PHP_SESSION_NONE) {
   session_start();
 }
 include '../connection.php';

if(isset($_GET['sbt'])){
   $comment = $_GET['commentValue'];
   $idproduct = $_SESSION['idproduct'];
   $idclient = $_SESSION['id'];

   $conn->query("INSERT INTO `review` (`id`, `idproduit`, `commentaire`, `idclient`) VALUES (NULL, '$idproduct', '$comment', '$idclient')") or die($conn->error);

        header('location: product.php');
 }

?>