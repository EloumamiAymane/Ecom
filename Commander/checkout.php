<?php
if (session_status() == PHP_SESSION_NONE) {
   session_start();
}
include '../connection.php';
include '../Site/navbar.php';


   ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/57a42140fc.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="cart.css">

</head>
<body>




   <h1 class="heading">Completer Votre Commande</h1>

   <div class="container text-center w-100 d-flex" >


   <form class="row g-3 w-50  d-flex justify-content-center text-center" action="insertcommander.php">
  <div class="col-md-6 w-75">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control text-center" id="inputEmail4" name="email">
  </div>
  <div class="col-12 w-75">
    <label for="inputPassword4" class="form-label">Name</label>
    <input type="text" class="form-control text-center" id="inputPassword4" name="name" required>
  </div>
  <div class="col-12 w-75">
    <label for="inputPassword4" class="form-label">Phone number</label>
    <input type="text" class="form-control text-center" id="inputPassword4" name="number" required>
  </div>
  <div class="col-12 w-75">
    <label for="inputPassword4" class="form-label">Methode</label>
    <input type="text" class="form-control text-center" id="inputPassword4" name="method" required>
  </div>
  <div class="col-12 w-75">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control text-center" name="address1" id="inputAddress" required >
  </div>
  <div class="col-12 w-75">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control text-center" name="city" id="inputCity" required>
  </div>
  <div class="col-12 w-75">
    <label for="inputCity" class="form-label">Zip</label>
    <input type="number" class="form-control text-center" id="inputCity" name="zip" required>
  </div>
 
  <div class="col-12">
    <button type="submit" name="insertCMD" class="btn btn-primary w-50 p-3">Order</button>
  </div>
</form>



   
<table class="table table-light w-50 ">
  <thead>
    <tr>
         <th class="text-center">Produit</th>
         <th class="text-center">Nom</th>
         <th class="text-center">Prix uniter</th>
         <th class="text-center">quantité</th>
         <th class="text-center">prix total</th>
    </tr>
  </thead>
  <tbody>
     <?php
  foreach($_SESSION['pannel'] as $key=>$value){
    //Pour accer au id de l'article et le donner en parametre de requette

    $select_cart = mysqli_query($conn, "SELECT * FROM produit where id='$key' ");
            
            while ($row = mysqli_fetch_assoc($select_cart)) {
            ?>
<tbody>
    <tr class="">
      <th scope="row" class="align-middle"><img src="<?php echo $row['imageLink'] ?>" class="imgPannel"></th>
      <td class="align-middle"><?php echo $row['nomProduit'] ?></td>
      <td class="align-middle"><?php echo $row['Prix'] ?></td>
      <td class="align-middle">  <input type="text" name="stockCommander" value="<?php echo $_SESSION['pannel'][$key];  ?>" style="width:30px;text-align:center;" disabled>      </td>         

      <td class="align-middle"><?php 
      $totalPrice=$_SESSION['pannel'][$key]*$row['Prix'];
      echo $totalPrice; ?></td>
      
  
        
  </tbody>
  <?php } 
  }?>
  <th colspan="5" class="align-middle">
      <a href="javascript: history.back()" >
         <button type="button" class="btn btn-success">Update your pannel <i class="fa-solid fa-pen"></i></button>
      </a>
   </th>
</table>

</div>


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



<script src="js/script.js"></script>
   
</body>
</html>