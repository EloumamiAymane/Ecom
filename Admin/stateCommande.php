<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'projet-ecomm');


if (isset($_GET['valid'])) {
    $id = $_GET['setStateCommandes'];
    if ($_GET['valid'] == 'true') {
        $quantiter = $_GET['quantiter'];
        $date = date('Y-m-d');

        $conn->query("UPDATE commandes SET stateOfOrder='Valider' WHERE id='$id'");


        $CMD = $conn->query("SELECT * FROM lignedecommande WHERE idcommande='$id'");
        $resultCMD = $CMD->fetch_assoc();
        if ($resultCMD == NULL) {
            $conn->query("INSERT INTO lignedecommande(idcommande,quantite,Date) VALUES ('$id','$quantiter','$date') ");
        }
    } else if ($_GET['valid'] == 'supprimer') {

        $rqt = $conn->query("SELECT * FROM lignedecommande where idcommande='$id' ");
        $reslt = $rqt->fetch_assoc();

        if ($reslt != NULL) {
            $conn->query("DELETE FROM lignedecommande WHERE idcommande='$id'") or die($conn->error);
        }
        $conn->query("DELETE FROM commandes WHERE id='$id'");
    } else {
        $conn->query("UPDATE commandes SET stateOfOrder='Invalider' WHERE id='$id' ");
        $rqt = $conn->query("SELECT * FROM lignedecommande where idcommande='$id' ");
        if ($rqt != NULL) {
            $conn->query("DELETE FROM lignedecommande WHERE idcommande='$id'") or die($conn->error);
        }
    }

    header('location: admin_page.php');
}
