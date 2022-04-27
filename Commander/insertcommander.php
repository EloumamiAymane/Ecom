<?php
include '../connection.php';
if (session_status() == PHP_SESSION_NONE) {
   session_start();
}
if (isset($_GET['insertCMD'])) {


   $selectQuantiter = $conn->query('SELECT * FROM produit');
   $quantiterAssoc = $selectQuantiter->fetch_assoc();

   foreach ($_SESSION['pannel'] as $key => $value) {

      $numbers = $_GET['number'];
      $email = $_GET['email'];
      $method = $_GET['method'];
      $address1 = $_GET['address1'];
      $totalPrice = $value * $quantiterAssoc['Prix'];
      $city = $_GET['city'];
      $zip = $_GET['zip'];
      $idClient = $_SESSION['id'];
      
      $conn->query("INSERT INTO commandes(id,numbers,email,method,states,zip,totalProduct,totalPrice,idclient,idproduit,stateOfOrder)
 VALUES (NULL,'$numbers','$email','$method','$address1',$zip,'$value','$totalPrice','$idClient','$key','inprocess'); ") or die($conn->error);
//       $conn->query("UPDATE produit,commandes set Quantite=Quantite-totalProduct
//  where produit.id=commandes.idproduit");
      $_SESSION['pannel'] = NULL;
      header('location: ../Produits/Article.php');
   }
}
