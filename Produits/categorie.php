<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include '../Site/navbar.php';
include "../Produits/sidebar/sidebar.php";
include '../connection.php';

//function affiche la liste des produits
$cat = $_GET['sel'];
$_SESSION['catego'] = $cat;


function funct($cat)
{


    $conn = mysqli_connect('localhost', 'root', '', 'projet-ecomm');
    if ($cat != "Electronique" && $cat != "Vetements" && $cat != "MaisonCuisine" && $cat != "BeauteSante") {
        $sql = "SELECT * FROM produit,catalogue  where produit.idcatalogue=catalogue.idC and genreCata='$cat'";
    } else {

        $sql = "SELECT * FROM produit,catalogue  where produit.idcatalogue=catalogue.idC and nom='$cat'";
    }
    $rqt = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($rqt)) {
?>
        <div class="col-3" style="height:550px; ">
            <a href="panel.php?addPanel=<?php echo $row['id'] ?>" style="position: relative;left: 210px;top:20px"><i class="fal fa-shopping-bag"></i></a>

            <a href="../Description/product.php?descri=<?php echo $row['id']; ?>" style="text-decoration:none;color:black;">
                <div style="margin-top:50px;margin-left:20px;">

                    <td><img src="<?php echo $row['imageLink']; ?>">
                        <button class="card-btn">
                        </button>

                </div>
                <div class="rating">
                    <h6><?php echo $row['nomProduit'] ?></h6>
                    <p class="descriptionCol3"><?php echo $row['Descriptions'] ?></p>

                    <div style="display:flex">
                        <div style="font-size:15px;">
                            <?php if ($row['Quantite'] != 0) : ?>
                                <p> <span style="color: #1DBF57;font-size:15px;">Stock avaible:</span> <?php echo "<span style='font-size:14px'>" . $row['Quantite'] . "</span>" ?></p>
                        </div>
                        <p style="margin-top:3px;margin-left:60px;font-size:15px"> <?php echo $row['Prix'] ?>$</p>
                    </div>
                <?php else : ?>
                    <s> <span style="color: #1DBF57;font-size:15px;position:relative;bottom:10px"> Stock avaible: </span> <?php echo "<span style='font-size:14px ;position:relative;bottom:10px;'>" . $row['Quantite'] . "</span>" ?></s>
                </div>
                <s>
                    <p style="margin-top:3px;margin-left:60px;font-size:15px"> <?php echo $row['Prix'] ?>$</p>
                </s>
        </div>
    <?php endif ?>

    </div>
    </div>
<?php }
}
?>
<?php

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PRODUCT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="navigation_menu&produits.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/57a42140fc.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/c293400814.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c293400814.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../HOME/home/styleHOME.css" />

</head>


<body>

    <!-- MMMMMEEEEENNNNNUUUUU -->
    <nav class="nav-menu">
        <menu class="menu">
            <ul id="navigation">
                <li class="list_marq">
                    <h3 style="text-align:center;"> Marques</h3>
                    <div class="marq">
                        <a href="Article.php" class="electro">Home

                        </a>



                </li>
                <li class="list_prix">
                    <h3 style="text-align:center;margin-top:5px;"> Prix (DH)</h3>
                    <div class="prix">
                        <a href="prix.php?id=<?php echo "100" ?>" class="prix1">Moins de 100.00</a><br> <br>
                        <a href="prix.php?id=<?php echo "199" ?>" class=" prix2">100.00 - 199.00</a><br><br>
                        <a href="prix.php?id=<?php echo "299" ?>" class="prix3">200.00 - 299.00</a><br><br>
                        <a href="prix.php?id=<?php echo "500" ?>" class="prix4">Plus que 500.00</a><br><br>
                    </div>
                </li>
            </ul>
        </menu>

    </nav>

    <div class="category-product">
        <div class="small-container">
            <h2 class="cat-title">Electronics Products</h2>
            <p class="desc">ajouté récement</p>
            <div class="row" style="display:inline-block;">

                <?php


                funct($cat);
                ?>

            </div>
        </div>
    </div>


</body>

</html>