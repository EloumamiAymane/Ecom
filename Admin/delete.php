<?php

$conn = mysqli_connect('localhost', 'root', '', 'projet-ecomm');
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, " DELETE FROM produit Where id= $id ");
    header("location:admin_page.php");
};


if(isset($_GET['deleteCompte'])){
    $id = $_GET['deleteCompte'];
    mysqli_query($conn, " DELETE FROM client Where id= $id ");
    header("location:admin_page.php");
}
