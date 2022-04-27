<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include '../connection.php';


$usern = $_SESSION['username'];
if (!isset($usern)) {
    header("Location: profile.php");
}

if (isset($_POST["Update"])) {
    $profil_username = mysqli_real_escape_string($conn, $_POST["profil_username"]);
    $profil_email = mysqli_real_escape_string($conn, $_POST["profil_email"]);
    $profil_password = mysqli_real_escape_string($conn, $_POST["profil_password"]);
    $profil_cpassword = mysqli_real_escape_string($conn, $_POST["profil_cpassword"]);
    $profil_phone = mysqli_real_escape_string($conn, $_POST["profil_phone"]);
    $profil_city = mysqli_real_escape_string($conn, $_POST["profil_city"]);

    if ($profil_password == $profil_cpassword) {
        $update = "UPDATE client SET username = '$profil_username', email = '$profil_email', password = '$profil_password', phoneNumber='$profil_phone', City = '$profil_city'";

        $upload = mysqli_query($conn, $update);
    } else {

        echo "<script>alert('Password incorecte');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Boutique N°1 d'achat et vente en ligne au Maroc ✓ TVs, smartphones, électroménager, mode, jouets, sport, jeux vidéos, déco et bien plus !" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/57a42140fc.js" crossorigin="anonymous"></script>
    <title>Profile</title>
    <link rel="stylesheet" href="Profile.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../HOME/styleHOME.css" />
    <link rel="stylesheet" href="../Admin/css/style.css" />
    <link rel="stylesheet" href="profile.css" />

</head>


<style>
        .shoppingIconPannel {
            position: relative;
            cursor: pointer;
            color: #1DBF57;
            margin-right: 15px;
        }

        .numberPannel {
            position: absolute;
            top: 0;
            left: 27px;
            height: 20px;
            width: 20px;
            font-size: 14px;
            text-align: center;
            color: white;
            background-color: #1DBF57;
            border-radius: 50%;
        }
    </style>

</head>



<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size:22px">
    <div class="container-fluid">
        <a href="../Home/home.php" style="color: #1DBF57;text-decoration:none;font-size:20px" class="navbar-brand">Electroware</a>
        <button class="navbar-toggler" id="eventdisplaylist" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto justify-content-center tst">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../Home/home.php">Home</a>
                </li>

                <li> <a href="../Profile/Profile.php" class="nav-link">
                        <?php if ($_SESSION['LoginOrNot']) : echo $_SESSION['username'];
                        endif; ?> </a></li>
                <li> <a href="../ABOUTUS/aboutus.php" class="nav-link active"> About us </a> </li>
                <li> <a href="../Contact us/contact.php" class="nav-link active"> Contact us </a> </li>


                <?php if (!$_SESSION['LoginOrNot']) : ?>
                    <li> <a href="../Comptes/login.php" class="nav-link active">Login</a> </li>
                <?php else : ?>
                    <li><a href="../Comptes/LogOut.php" class="nav-link active">LogOut</a></li>
                <?php endif; ?>
                </li>
            </ul>

            <form class="d-flex" action="../Produits/SearchPage/search.php">
                <input class="form-control me-2" name="searchInput" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" name="searchBtn">Search</button>
            </form>
            <a href="../Commander/displaypannel.php">
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


    <div class="container">
        <div class="form-container">
            <form action="" method="post" enctype="multipart/form-data" class="frm">
                <h3 style="margin-bottom:20px;width:590px;text-align: center;font-size:xx-large;">Profile</h3>

                <?php


                $result = mysqli_query($conn, "SELECT * FROM client WHERE username = '{$usern}'");


                while ($row = mysqli_fetch_assoc($result)) {


                ?>
                    <label for="profil_email">Email:</label>
                    <input type="email" placeholder="entrer votre email" name="profil_email" class="box">
                    <label for="profil_username">Username:</label>
                    <input type="text" value="<?php echo $row['username']; ?>" placeholder="entrer Username" name="profil_username" class="box">
                    <label for="profil_password">Password:</label>
                    <input type="password" value="<?php echo $row['password']; ?>" placeholder="entrer le Password" name="profil_password" class="box">
                    <label for="profil_cpassword">Password:</label>
                    <input type="password" value="<?php echo $row['password']; ?>" placeholder="entrer le Password" name="profil_cpassword" class="box">
                    <label for="profil_phone">Phone Number:</label>
                    <input type="tel" placeholder="entrer Phone Number:" name="profil_phone" class="box">
                    <label for="profil_adresse">Adresse:</label>
                    <input type="text" placeholder="entrer Adresse" name="profil_adresse" class="box">
                    <label for="profil_city">Ville:</label>
                    <input type="text" placeholder="entrer la Ville" name="profil_city" class="box">
                    <button type="submit" name="Update" class="btnn">Mettre à Jour le Profil</button>
                <?php
                } ?>
            </form>
        </div>

    </div>


    <?php

    $select = mysqli_query($conn, " SELECT DISTINCT * FROM client,commandes,produit WHERE client.id=commandes.idclient AND commandes.idproduit=produit.id and username='$usern'
  ");

    ?>



    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>username</th>
                    <th>email</th>
                    <th>Product</th>
                    <th>Etat_product</th>
                </tr>
            </thead>

            <?php while (($row = mysqli_fetch_assoc($select))) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><img src="<?php echo $row['imageLink']; ?>" height="100 ">
                    <td><?php echo $row['stateOfOrder']; ?></td>
                </tr>
            <?php  } ?>
        </table>
    </div>
    <style>
        .product-display-table {
            position: relative;
            top: 10px;
            right: 230px;
        }
    </style>




</body>





<footer class="myfooter">


    <div class="footer-widget">

        <p> FREE SHIPPING & RETURN <br> Free shipping on all orders over $99.</p> <br> <br>


        <p>MONEY BACK GUARANTEE<br>100% money back guarantee.</p><br> <br>


        <p> LIVE SUPPORT <br>Lorem ipsum dolor sit amet.</p><br> <br>
    </div>

    <div>
        <h2 class="widget-title">Account</h2>
        <ul>
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