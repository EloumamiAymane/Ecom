<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
include '../Site/navbar.php';
$connection = new mysqli('localhost','root',NULL,'projet-ecomm') or die(mysqli_error($connection));
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Boutique N°1 d'achat et vente en ligne au Maroc ✓ TVs, smartphones, électroménager, mode, jouets, sport, jeux vidéos, déco et bien plus !" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/57a42140fc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="../HOME/styleHOME.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>







<body>

<div class="tst">

<h1 class="titleFounder">Founder of Electroware</h1>


<?php
    $getTrend = $connection->query("SELECT * FROM founder ") or die(mysqli_error($connection));;
    $record = array();
    while($row = mysqli_fetch_assoc($getTrend)){
        $record[] = $row;
    }
?>


<div class="containerFounder">
<?php foreach($record as $rec){?>

    <div class="squareOfProduct">
        <img src="<?php echo $rec['picture'] ?>" alt="Idriss Dou"  class="pictureFounder">
        <div class="text">
        <h1><?php echo $rec['nom'] ?></h1>
        <p><?php echo $rec['prenom'] ?></p>
        <p> <?php echo $rec['mail'] ?></p>
        <p> <?php echo $rec['status'] ?></p>
        </div>

    </div>

    <?php } ?>

</div>

</body>
    




    
<footer class="myfooter foraboutus">

            
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