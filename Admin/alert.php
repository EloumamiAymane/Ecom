<?php
include '../connection.php';
 if(isset($_GET['alert'])){

                    $idAlert=$_GET['alert'];
                    $alert=$conn->query("SELECT Alert FROM client WHERE id=$idAlert ") or die($conn->error);
                    $alertValue=$alert->fetch_assoc(); 
                    $altValue= $alertValue['Alert'];
                    $altValue=$altValue+1;
                    $conn->query("UPDATE client SET Alert=$altValue WHERE id=$idAlert") or die($conn->error);
                    header('location:admin_page.php');
                }
?>