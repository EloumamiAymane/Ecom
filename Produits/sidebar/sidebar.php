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
    <menu class="menu">
        <ul id="navigation">
            <li class="list_marq">
                <h3 style="text-align:center">Marques</h3>
                <div class="marq">
                    <a href="#" class="electro">Eléctronique</a>

                    <ul class="electro-show">
                        <li><a href="categorie.php?sel=<?php echo "Telephone" ?>">Téléphone</a></li>
                        <li><a href="categorie.php?sel=<?php echo "Ordinateur" ?>">Ordinateur</a></li>
                        <li><a href="categorie.php?sel=<?php echo "Smart Watch" ?>">Smart Watch</a></li>
                    </ul>
                    <!--  <div id="barre"></div> -->
                    <a href="#" class="maison">Vêtements</a>
                    <ul class="maison-show">
                        <li><a href="categorie.php?sel=<?php echo "Pantalon" ?>">Pantalons</a></li>
                        <li><a href="categorie.php?sel=<?php echo "Chemises" ?>">Chemises</a></li>
                        <li><a href="categorie.php?sel=<?php echo "Chaussures" ?>">Chaussures</a></li>
                    </ul>

                    <!--    <div id="barre"></div>-->
                    <a href="#" class="vetement">Beauté & Santé</a>
                    <ul class="vetement-show">
                        <li><a href="categorie.php?sel=<?php echo "Beaute&Parfums" ?>">Beauté & Parfums</a></li>
                        <li><a href="categorie.php?sel=<?php echo "Santé&Premiers Soins" ?>">Santé & Premiers Soins</a></li>
                        <li><a href="categorie.php?sel=<?php echo "Equipementmedicaux" ?>"> équipement médicaux</a></li>
                    </ul>



                    <a href="#" class="Acc">Accessoires Mode</a>



                    <a href="#" class="cuisine">Maison & Cuisine</a>
                    <ul class="cuisine-show">
                        <li><a href="categorie.php?sel=<?php echo "Gros Electroménager" ?>">Gros Electroménager</a></li>
                        <li><a href="categorie.php?sel=<?php echo "Art, artisanat et couture" ?>">Art, artisanat et couture</a></li>
                        <li><a href="categorie.php?sel=<?php echo "Maison et ameublement" ?>">Maison et ameublement</a></li>
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