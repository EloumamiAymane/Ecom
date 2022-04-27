<?php
$connection = new mysqli('localhost', 'root', NULL, 'projet-ecomm') or die(mysqli_error($connection));
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if (!isset($_SESSION['pannel']))
        $_SESSION['pannel'] = array();
}
include '../Site/navbar.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Descriptions" content="Boutique N°1 d'achat et vente en ligne au Maroc ✓ TVs, smartphones, électroménager, mode, jouets, sport, jeux vidéos, déco et bien plus !" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/57a42140fc.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Electroware</title>
    <link rel="stylesheet" href="styleHOME.css" />

</head>


<body>


    <div>

        <div class="Part1OfBody">

            <img src="shoesHOME.jpg" alt="" class="shoesPic">

            <div class="textPart1" >
                <h1 style="font-size: 2em;line-height: 1;font-weight: 500;">New Brown Collection</h1>
                <h1 style="font-family: 'Oswald', sans-serif;font-size: 6em;font-weight: 700;line-height: 1;color: #212529;">Summer Sale</h1>
                <h1 style="font-size: 7.9em;font-weight: 700;line-height: 1;color: #212529;">30% OFF</h1>
                <h1 style="font-size: 1em;font-weight: 700;color: #212529;">Starting at: 39$</h1>
                <a href="../Produits/Article.php"><button class="btnPart1Body">Get Yours!</button></a>
            </div>
            <div class="ContainerText" id="products">


                <div class="containerToggle">

                    <a href="" class="togleList1">Categories <span> &rsaquo;</span></a>

                    <div class="DropMenu" style="margin-left:25px;">
                        <a href="../Produits/categorie.php?sel=<?php echo "Electronique"; ?>" class="item" style="padding:10px;text-align: center;margin-left:15px;"> electroniques</a>
                        <div class="trait"></div>
                        <a href="../Produits/categorie.php?sel=<?php echo "Vetements"; ?>" class="item" style="padding:10px;text-align: center;margin-left:15px;"> clothes </a>
                        <div class="trait"></div>
                        <a href="../Produits/categorie.php?sel=<?php echo "MaisonCuisine"; ?>" class="item" style="padding:10px;text-align: center;margin-left:15px;"> Maison&Cuisine </a>
                        <div class="trait"></div>
                        <a href="../Produits/categorie.php?sel=<?php echo "BeauteSante"; ?>" class="item" style="padding:10px;text-align: center;margin-left:15px;"> Beaute&Sante</a>
                    </div>
                </div>

                <div class="containerToggle">
                    <a href="../Produits/Article.php"><button class="togleList1">Shopping </button></a>
                </div>

                <div class="containerToggle">

                    <button class="togleList1">Pages <span> &rsaquo;</span></button>

                    <div class="DropMenu">
                        <a href="../ABOUTUS/aboutus.php" class="item"> about us</a>
                        <a href="../Contact us/Contact.php" class="item"> contact us </a>
                        <a href="../Site/cart.php" class="item"> shoppping </a>
                        <a href="../Site/checkout.php" class="item"> checkout</a>
                    </div>
                </div>

            </div>
        </div>


    </div>


    <div class="ContainerPart2">
        <table class="myTable">
            <tr>
                <td> <i style="color: #1DBF57;" class="fa-solid fa-truck-fast"> &nbsp;&nbsp; <em style="color: #1DBF57;font-size:10px">FREE SHIPPING & RETURN </em></i> &nbsp;&nbsp; <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Free shipping on all orders over $99.</td>
                <td> <i style="color: #1DBF57;" class="fa-solid fa-dollar-sign"> <em style="color: #1DBF57;font-size:10px">MONEY BACK GUARANTEE</em> &nbsp;&nbsp;&nbsp;&nbsp; </i> <br>
                    &nbsp;&nbsp; 100% money back guarantee.</td>
                <td><i style="color: #1DBF57;" class="fa-solid fa-handshake-angle"></i> &nbsp;&nbsp;<em style="color: #1DBF57;font-size:10px">ONLINE SUPPORT 24/7</em> &nbsp;&nbsp;<br>
                    Lorem ipsum dolor sit amet.</td>

            </tr>
        </table>
    </div>

    <!-- --------------------- TRENDING ------------------------ -->
    <h1 class="titleTrend">Trending Products</h1>
    <?php
    $getTrend1 = $connection->query("SELECT * FROM produit where id=31 ") or die(mysqli_error($connection));
    $row1 = mysqli_fetch_assoc($getTrend1);
    $getTrend2 = $connection->query("SELECT * FROM produit where id=32 ") or die(mysqli_error($connection));
    $row2 = mysqli_fetch_assoc($getTrend2);
    $getTrend3 = $connection->query("SELECT * FROM produit where id=33 ") or die(mysqli_error($connection));
    $row3 = mysqli_fetch_assoc($getTrend3);
    ?>


    <div class="containerPicTrend">


        <div class="squareOfProduct">
            <a href="../Description/product.php?descri=<?php echo $row1['id']; ?>" style="text-decoration:none;color:black;">
                <img src="<?php echo $row1['imageLink'] ?>" alt="" class="pictureTrend">


                <?php echo "<h1 class='titleMedia'>" . $row1['nomProduit'] . "</h1>"; ?>
                <?php echo "<p'class='Descriptions'>" . $row1['Descriptions'] . "</p>"; ?>
                <div class="PricePStrock">

                    <p style=" color: #1DBF57;">Price : <?php echo "<p style='color: black;' class='prix'>" . $row1['Prix'] . "</p>" ?> $ </p>
                    <p> <span style="color: #1DBF57;">Stock avaible:</span> <?php echo "<p class='stock'>" . $row1['Quantite'] . "</p>" ?></p>
                </div>

                <a href="../Produits/panel.php?addPanel=<?php echo $row1['id'] ?>"><button class="btnMedia">ADD TO PANNEL</button></a>

        </div>

        <div class="squareOfProduct">
            <a href="../Description/product.php?descri=<?php echo $row2['id']; ?>" style="text-decoration:none;color:black;">
                <img src="<?php echo $row2['imageLink'] ?>" alt="" class="pictureTrend">
                <?php echo "<h1 class='titleMedia'>" . $row2['nomProduit'] . "</h1>"; ?>
                <?php echo "<p'class='Descriptions'>" . $row2['Descriptions'] . "</p>"; ?>
                <div class="PricePStrock">
                    <p style=" color: #1DBF57;">Price : <?php echo "<p style='color: black;' class='prix'>" . $row2['Prix'] . "</p>" ?> $</p>
                    <p> <span style="color: #1DBF57;">Stock avaible:</span> <?php echo "<p class='stock'>" . $row2['Quantite'] . "</p>" ?></p>
                </div>

                <a href="../Produits/panel.php?addPanel=<?php echo $row2['id'] ?>"><button class="btnMedia">ADD TO PANNEL</button></a>
        </div>

        <div class="squareOfProduct">
            <a href="../Description/product.php?descri=<?php echo $row3['id']; ?>" style="text-decoration:none;color:black;">
                <img src="<?php echo $row3['imageLink'] ?>" alt="" class="pictureTrend">
                <?php echo "<h1 class='titleMedia'>" . $row3['nomProduit'] . "</h1>"; ?>
                <?php echo "<p'class='Descriptions'>" . $row3['Descriptions'] . "</p>"; ?>
                <div class="PricePStrock">
                    <p style=" color: #1DBF57;">Price : <?php echo "<p style='color: black;' class='prix'>" . $row3['Prix'] . "</p>" ?> $</p>
                    <p> <span style="color: #1DBF57;">Stock avaible:</span> <?php echo "<p class='stock'>" . $row3['Quantite'] . "</p>" ?></p>
                </div>

                <a href="../Produits/panel.php?addPanel=<?php echo $row3['id'] ?>"><button class="btnMedia">ADD TO PANNEL</button></a>
        </div>

    </div>


    <!-- /* ------------------------------ Best selling items ------------------- */ -->


    <?php
    $getTrend1 = $connection->query("SELECT * FROM produit where id=34 ") or die(mysqli_error($connection));
    $row1 = mysqli_fetch_assoc($getTrend1);
    $getTrend2 = $connection->query("SELECT * FROM produit where id=35 ") or die(mysqli_error($connection));
    $row2 = mysqli_fetch_assoc($getTrend2);
    $getTrend3 = $connection->query("SELECT * FROM produit where id=36 ") or die(mysqli_error($connection));
    $row3 = mysqli_fetch_assoc($getTrend3);
    ?>
    <h1 class="titleBest">Best selling items</h1>
    <div class="containerPicTrend">

        <div class="squareOfProduct mg">
            <a href="../Description/product.php?descri=<?php echo $row1['id']; ?>" style="text-decoration:none;color:black;">
                <img src="<?php echo $row1['imageLink'] ?>" alt="" class="pictureTrend">
                <?php echo "<h1 class='titleMedia'>" . $row1['nomProduit'] . "</h1>"; ?>
                <?php echo "<p'class='Descriptions'>" . $row1['Descriptions'] . "</p>"; ?>
                <div class="PricePStrock">
                    <p style=" color: #1DBF57;">Price : <?php echo "<p style='color: black;' class='prix'>" . $row1['Prix'] . "</p>" ?> $</p>
                    <p> <span style="color: #1DBF57;">Stock avaible:</span> <?php echo "<p class='stock'>" . $row1['Quantite'] . "</p>" ?></p>
                </div>
                <a href="../Produits/panel.php?addPanel=<?php echo $row1['id'] ?>">
                    <button class="btnMedia">ADD TO PANNEL</button>
                </a>

        </div>

        <div class="squareOfProduct">
            <a href="../Description/product.php?descri=<?php echo $row2['id']; ?>" style="text-decoration:none;color:black;">
                <img src="<?php echo $row2['imageLink'] ?>" alt="" class="pictureTrend">
                <?php echo "<h1 class='titleMedia'>" . $row2['nomProduit'] . "</h1>"; ?>
                <?php echo "<p'class='Descriptions'>" . $row2['Descriptions'] . "</p>"; ?>
                <div class="PricePStrock">
                    <p style=" color: #1DBF57;">Price : <?php echo "<p style='color: black;' class='prix'>" . $row2['Prix'] . "</p>" ?> $</p>
                    <p> <span style="color: #1DBF57;">Stock avaible:</span> <?php echo "<p class='stock'>" . $row2['Quantite'] . "</p>" ?></p>
                </div>
                <a href="../Produits/panel.php?addPanel=<?php echo $row2['id'] ?>"><button class="btnMedia">ADD TO PANNEL</button></a>

        </div>

        <div class="squareOfProduct">
            <a href="../Description/product.php?descri=<?php echo $row3['id']; ?>" style="text-decoration:none;color:black;">
                <img src="<?php echo $row3['imageLink'] ?>" alt="" class="pictureTrend">
                <?php echo "<h1 class='titleMedia'>" . $row3['nomProduit'] . "</h1>"; ?>
                <?php echo "<p'class='Descriptions'>" . $row3['Descriptions'] . "</p>"; ?>
                <div class="PricePStrock">
                    <p style=" color: #1DBF57;">Price : <?php echo "<p style='color: black;' class='prix'>" . $row3['Prix'] . "</p>" ?> $</p>
                    <p> <span style="color: #1DBF57;">Stock avaible:</span> <?php echo "<p class='stock'>" . $row3['Quantite'] . "</p>" ?></p>
                </div>

                <a href="../Produits/panel.php?addPanel=<?php echo $row3['id'] ?>"><button class="btnMedia">ADD TO PANNEL</button></a>
        </div>

    </div>
    </div>

</body>


<script src="navbar.js"></script>


<!-- /* ---------------------- FOOTER -------------------------------------- */ -->




<footer class="myfooter">


    <div class="footer-widget">

        <p> FREE SHIPPING & RETURN <br> Free shipping on all orders over $99.</p> <br> <br>


        <p>MONEY BACK GUARANTEE<br>100% money back guarantee.</p><br> <br>


        <p> LIVE SUPPORT <br>Lorem ipsum dolor sit amet.</p><br> <br>
    </div>

    <div>
        <h2 class="widget-title displayN">Account</h2>
        <ul class="displayN">
            <li> <a href="#">My Account </a></li>
            <li> <a href="#">Track Your Order</a></li>
            <li> <a href="#">Payement Methods </a></li>
            <li> <a href="#">Shipping Guide</a></li>
            <li> <a href="#">FAQs</a></li>
            <li> <a href="#">Product Support</a></li>
            <li> <a href="#">Privacy</a></li>
        </ul>
    </div>


    <div>
        <h2 class="widget-title">
            About
        </h2>
        <ul>
            <li> <a href="#">About Valina </a></li>
            <li> <a href="#">Our Guarantees</a></li>
            <li> <a href="#">Terms And Conditions </a></li>
            <li> <a href="#">Privacy policy</a></li>
            <li> <a href="#">Return policy</a></li>
            <li> <a href="#">Intellectual Property claims</a></li>
            <li> <a href="#">Site Map</a></li>


        </ul>
    </div>


    <div class="Payement-SocielMedia">

        <div class="coloumn3">
            <div class="footer-widget">
                <h2 class="widget-title">
                    Folow Us
                </h2>
                <div class="icons_social">
                    <i class="fa-brands fa-facebook-square"></i> &nbsp; &nbsp;
                    <i class="fa-brands fa-twitter"></i> &nbsp; &nbsp;
                    <i class="fa-brands fa-instagram-square"></i> &nbsp; &nbsp;
                    <i class="fa-brands fa-tiktok"></i> &nbsp; &nbsp;
                </div>
            </div>
        </div>

        <div class="coloumn4">
            <div class="footer-widget">
                <h2 class="widget-title">
                    PAYMENT METHODS
                </h2>

                <div class="icons_pay">
                    <i class="fa-brands fa-paypal"></i>&nbsp; &nbsp;
                    <i class="fa-brands fa-cc-amex"></i>&nbsp; &nbsp;
                    <i class="fa-brands fa-cc-visa"></i>&nbsp; &nbsp;
                    <i class="fa-brands fa-cc-mastercard"></i>&nbsp; &nbsp;
                </div>


            </div>

        </div>


        <div CLASS="copyright">
            <p> Copyright &copy; 2022 All rights reserved</p>

        </div>


    </div>
</footer>

</html>