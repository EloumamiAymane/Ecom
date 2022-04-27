<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    
}
    include '../Site/navbar.php';
    include 'signupCONTROLE.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="signupSTYLE.css">
    <link rel="stylesheet" href="../HOME/styleHOME.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet" />
   
       
        <script src="https://kit.fontawesome.com/57a42140fc.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    </head>

<head>

</head>
<body>


<div id="ContainerSIGNUP">
            <form action="" method="post" id="formSignUp" style="margin-top:200px;">
                <h1 style="margin-bottom:50px;">Register</h1>
                <form action="" method="post" id="formLogin">
                <label for="username">Username</label>
                <input type="text" class="inputBAR" name="username" required>
                <label for="Email">Email</label>
                <input type="email" class="inputBAR" name="email" required>
                <label for="Password">Password</label>
                <input type="Password" class="inputBAR" name="password" id="mdp1" required>
                <label for="password">Confirm Password</label>
                <input type="password" class="inputBAR" name="confirmPasswd" id="mdp2" onkeyup='cherkfunction()' required>
                <label for="Phone">Phone Number</label>
                <input type="Phone" class="inputBAR" name="phone" required>
                <label for="City">City</label>
                <input type="text" class="inputBAR" name="city" requiredd>
                <button name="signup" id="buttonSIGNUP" style="margin-top:20px;" class="buttons">SignUp</button>
                <button name="login" id="buttonlogin" style="margin-top:20px;" class="buttons"><a href="login.php" style="color:white;text-decoration:none;"> Already Have an account </a></button>
                <?php if(!$_SESSION['redondanceDATA']){ ?>
                <h1 style="color:red;
                margin-top:20px;">Invalid Information</h1>
                <?php } ?>
            </form>

            <script src="signupJsControle.js"></script>

        </div>

</body>
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