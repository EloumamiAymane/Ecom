<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = mysqli_connect('localhost', 'root', '', 'projet-ecomm'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side bar</title>
    <link rel="stylesheet" href="../navigation_menu&produits.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>
<nav class="nav-menu">
    <menu class="menu" style="position: relative; top:120px;">
        <ul id="navigation">
            <li class="list_marq">
                <h3 style="text-align:center">Marques</h3>
                <div class="marq">
                    <a href="#" class="electro">Eléctronique</a>

                    <ul class="electro-show">
                        <li><a href="../categorie.php?sel=<?php echo "Telephone" ?>">Téléphone</a></li>
                        <li><a href="../categorie.php?sel=<?php echo "Ordinateur" ?>">Ordinateur</a></li>
                        <li><a href="../categorie.php?sel=<?php echo "Smart Watch" ?>">Smart Watch</a></li>
                    </ul>
                    <!--  <div id="barre"></div> -->
                    <a href="#" class="maison">Vêtements</a>
                    <ul class="maison-show">
                        <li><a href="../categorie.php?sel=<?php echo "Pantalon" ?>">Pantalons</a></li>
                        <li><a href="../categorie.php?sel=<?php echo "Chemises" ?>">Chemises</a></li>
                        <li><a href="../categorie.php?sel=<?php echo "Chaussures" ?>">Chaussures</a></li>
                    </ul>

                    <!--    <div id="barre"></div>-->
                    <a href="#" class="vetement">Beauté & Santé</a>
                    <ul class="vetement-show">
                        <li><a href="../categorie.php?sel=<?php echo "Beaute&Parfums" ?>">Beauté & Parfums</a></li>
                        <li><a href="../categorie.php?sel=<?php echo "Santé&Premiers Soins" ?>">Santé & Premiers Soins</a></li>
                        <li><a href="../categorie.php?sel=<?php echo "Equipementmedicaux" ?>"> équipement médicaux</a></li>
                    </ul>






                    <a href="#" class="cuisine">Maison & Cuisine</a>
                    <ul class="cuisine-show">
                        <li><a href="../categorie.php?sel=<?php echo "Gros Electroménager" ?>">Gros Electroménager</a></li>
                        <li><a href="../categorie.php?sel=<?php echo "Art, artisanat et couture" ?>">Art, artisanat et couture</a></li>
                        <li><a href="../categorie.php?sel=<?php echo "Maison et ameublement" ?>">Maison et ameublement</a></li>
                    </ul>
                </div>
            </li>

    </menu>

</nav>
<script>
    $('.electro').click(function() {
        $('nav ul .electro-show').toggleClass("show");
        $('.electro').toggleClass("show0");
        $('nav ul .first').toggleClass("rotate");
    });
    $('.maison').click(function() {
        $('nav ul .maison-show').toggleClass("show1");
        $('.maison').toggleClass("show0");
        $('nav ul .second').toggleClass("rotate");
    });
    $('.automobile').click(function() {
        $('nav ul .auto-show').toggleClass("show2");
        $('.automobile').toggleClass("show0");
        $('nav ul .tried').toggleClass("rotate");
    });
    $('.cuisine').click(function() {
        $('nav ul .cuisine-show').toggleClass("show3");
        $('.cuisine').toggleClass("show0");
        $('nav ul .tried').toggleClass("rotate");
    });
    $('.vetement').click(function() {
        $('nav ul .vetement-show').toggleClass("show4");
        $('.vetement').toggleClass("show0");
        $('nav ul .tried').toggleClass("rotate");
    });
</script>

</html>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/57a42140fc.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../navigation_menu&produits.css">

</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="../../Home/home.php" style="color: #1DBF57;text-decoration:none;" class="navbar-brand">Electroware</a>
        <button class="navbar-toggler" id="eventdisplaylist" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto justify-content-center tst">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../Home/home.php">Home</a>
                </li>

                <li> <a href="../../Profile/Profile.php" class="nav-link">
                        <?php if ($_SESSION['LoginOrNot']) : echo $_SESSION['username'];
                        endif; ?> </a></li>
                <li> <a href="../../ABOUTUS/aboutus.php" class="nav-link active"> About us </a> </li>
                <li> <a href="../../Contact us/contact.php" class="nav-link active"> Contact us </a> </li>


                <?php if (!$_SESSION['LoginOrNot']) : ?>
                    <li> <a href="../../Comptes/login.php" class="nav-link active">Login</a> </li>
                <?php else : ?>
                    <li><a href="../../Comptes/LogOut.php" class="nav-link active">LogOut</a></li>
                <?php endif; ?>
                </li>
            </ul>

            <form class="d-flex" action="../../Produits/SearchPage/search.php">
                <input class="form-control me-2" name="searchInput" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" name="searchBtn">Search</button>
            </form>
            <a href="../../Commander/displaypannel.php">
                <li class="shoppingIconPannel nav-link active" id="iconpannel">
                    <i class="fal fa-shopping-cart"></i>
                    <?php if (empty($_SESSION['pannel'])) : ?>
                        <h1 class="numberPannel"><?php echo 0 ?></h1>
                    <?php else : ?>
                        <h1 class="numberPannel"><?php echo count($_SESSION['pannel']); ?></h1>
                    <?php endif ?>
                </li>
            </a>
        </div>
    </div>


</nav>


<body>
    <?php

    if (isset($_GET['searchBtn'])) {
        $searchValue = $_GET['searchInput'];


        $sql =  "SELECT  * FROM produit,catalogue WHERE produit.idcatalogue=catalogue.idC
         AND
         ( nomProduit LIKE '%$searchValue%' OR nom LIKE'%$searchValue%' )";
        $rqt = mysqli_query($conn, $sql);
        if ($rqt == NULL) {
            include "a.php";
        } else {

    ?>


            <?php

            function funct()
            {
                $searchValue = $_GET['searchInput'];


                // OR genreCata LIKE '$searchValue'
                $conn = mysqli_connect('localhost', 'root', '', 'projet-ecomm');
                $sql =  "SELECT  * FROM produit,catalogue WHERE produit.idcatalogue=catalogue.idC
         AND
         ( nomProduit LIKE '%$searchValue%' OR nom LIKE'%$searchValue%' )";
                $rqt = mysqli_query($conn, $sql);





                while ($row = mysqli_fetch_assoc($rqt)) {
            ?>
                    <div class="col-3" style="height:550px; ">
                        <a href="../panel.php?addPanel=<?php echo $row['id'] ?>" style="position: relative;left: 210px;top:20px"><i class="fal fa-shopping-bag"></i></a>

                        <a href="../../Description/product.php?descri=<?php echo $row['id']; ?>" style="text-decoration:none;color:black;">
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
        }
    }



?>




<div class="category-product">
    <div class="small-container">
        <h2 class="cat-title">Electronics Products</h2>
        <p class="desc">ajouté récement</p>
        <div class="row" style="display:inline-block;">

            <?php


            funct();
            ?>

        </div>
    </div>
</div>
</body>

</html>