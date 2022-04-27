     <?php  
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginSTYLE.css">
    <link rel="stylesheet" href="../HOME/styleHOME.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet" />
        <script src="https://kit.fontawesome.com/57a42140fc.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="../Home/home.php" style="color: #1DBF57;text-decoration:none;" class="navbar-brand">Electroware</a>
        <button class="navbar-toggler" id="eventdisplaylist" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto justify-content-center tst">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../Home/home.php">Home</a>
                </li>

                <li> <a href="../ABOUTUS/aboutus.php" class="nav-link active"> About us </a> </li>
                <li> <a href="../Contact us/contact.php" class="nav-link active"> Contact us </a> </li>
                <li> <a href="../Comptes/login.php" class="nav-link active">Login</a> </li>
                
            </ul>

            <form class="d-flex" action="../Produits/SearchPage/search.php">
                <input class="form-control me-2" name="searchInput" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" name="searchBtn">Search</button>
            </form>

            
        </div>
    </div>


</nav>
<body>
<?php
$_SESSION['disabledAccount']=true;
 include 'loginControle.php';?>

<div id="ButtonNavi">
    <button id="naviGuest"><a href="../HOME/home.php">Navigate us guest!!</a></button>
</div>
  

        <div id="ContainerLogin" >
                 <form method="post" id="formLogin">
                <h1>Login</h1>  
                <label for="username" >Username</label>
                <input type="text" class="inputBAR" name="username" required>
                <label for="password">Password</label>
                <input type="password" class="inputBAR" name="password" required>
                <button name="login" id="buttonLogin">Login</button>
                <button name="login" id="RegisterFree"><a href="signup.php" style="color:white;text-decoration:none;">Register for free!</a></button>
                <?php if(!$_SESSION['foundINFO']){ ?>
                <h1 style="color:red;
                font-size:30px;margin-top:15px">Invalid Information</h1>
                <?php  }
                 ?>


                 <?php
                 if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                 if(!$_SESSION['disabledAccount']){ ?>
                <h1 style="color:red;font-size:30px;margin-top:15px">
                your account has been disabled
                </h1>
                <?php  }
                 ?>
                 
            </form>

        </div>
    

<script src="signupJsControle.js"></script>
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