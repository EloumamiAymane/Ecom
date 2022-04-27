<?php 
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
include '../Site/navbar.php';
include '../connection.php';

      // if(!isset($_SESSION['selectedProduct from discr']))
      if(isset($_GET['descri']))  { 
       $_SESSION['selectedProduct-from-link']=$_GET['descri'];
        }
        $valueOfProduct = $_SESSION['selectedProduct-from-link'];
        $getIDQuery=$conn->query(" SELECT * FROM produit
        WHERE id=$valueOfProduct ") or die(mysqli_error($conn));
        $row = mysqli_fetch_array($getIDQuery);
    
?>
<html>
  <head>
    <title>E-Commerce Website Single Product</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
  </head>
  <body>
    <!-------------Nav bar------------->
  
    <!-------------Single Product------------->

    <div id="htmlContent">
    <section class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div
              id="product-slider"
              class="carousel slide carousel-fade"
              data-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo $row['imageLink']; ?>" class="d-block" width="482px" height="482px"/>
                </div>
                
                <a
                  class="carousel-control-prev"
                  href="#product-slider"
                  role="button"
                  data-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a
                  class="carousel-control-next"
                  href="#product-slider"
                  role="button"
                  data-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-7">
            <p class="new-arrival text-center">NEW</p>
            <h2 id="nomProduit" ><?php echo $row['nomProduit'];$_SESSION['nomProd']=$row['nomProduit']; ?></h2>
            <p>Product Code: <?php echo $row['id']; $_SESSION['idproduct']=$row['id']; ?></p>

            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>

            <p class="price">USD $<?php echo $row['Prix'] ?></p>
            <p><b>Disponibilité:</b><?php echo $row['Quantite'] ?> En Stock</p>
            <p><b>Condition:</b> Nouveau</p>
            <p><b>Marque:</b> XYZ Company</p>
            <form action="" method="post">
            <label for="product_quantity">Quantité: </label>
            <input type="text" value="1" name="product_quantity"/>
            <a href="../Produits/panel.php?addPanel=<?php echo $row['id'] ?>"><button type="button" class="btn btn-primary" name="add_to_cart">Ajouter Au Panier</button></a>
            </form>
            
  <p>
    <button id="generatePDF" class="btn btn-primary mt-2" style="margin-left:105px" >Générer le PDF</button>
  </p>

          </div>
        </div>
      </div>
    </section>

    <!------------product-description-------------->

    <section class="product-description">
      <div class="container">
        <h6>Description Du Produit</h6>
        <p>
          <!---Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, sint? Commodi, 
          ipsam. Fugiat tempore modi illum aliquid similique consequuntur laudantium
           nihil eius reprehenderit reiciendis.Quasi accusamus debitis non iste inventore.
           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, sint? Commodi, 
          ipsam. Fugiat tempore modi illum aliquid similique consequuntur laudantium
           nihil eius reprehenderit reiciendis.Quasi accusamus debitis non iste inventore.----->
           <?php echo $row['Descriptions'] ?>
        </p>
        <p>
          nihil eius reprehenderit reiciendis.Quasi accusamus debitis non iste inventore.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, sint? Commodi, 
          ipsam. Fugiat tempore modi illum aliquid similique consequuntur laudantium
          ipsam. Fugiat tempore modi illum aliquid similique consequuntur laudantium
           nihil eius reprehenderit reiciendis.Quasi accusamus debitis non iste inventore.
           nihil eius reprehenderit reiciendis.Quasi accusamus debitis non iste inventore.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut, sint? Commodi, 
          ipsam. Fugiat tempore modi illum aliquid similique consequuntur laudantium
          ipsam. Fugiat tempore modi illum aliquid similique consequuntur laudantium
           nihil eius reprehenderit reiciendis.Quasi accusamus debitis non iste inventore.
        </p>

        <hr />
      </div>
      </div>

<!-- ------------Comments------------------- -->

<h1 style="text-align: center;">Comments</h1>

<div id="zoneComment" style="display:flex;justify-content:center;">
    <?php 
    $idprod = $_SESSION['idproduct'];
    $rqt = $conn->query("SELECT * from review where idproduit='$idprod' ");
    
    while ($row = mysqli_fetch_assoc($rqt)) {
    ?>
        <div>
          <?php
           $idCl = $row['idclient'];
           $idclient=$conn->query("SELECT * from client where id='$idCl' ") or die($conn->error);
           $resltID=$idclient->fetch_assoc(); ?>
           <h1 style="text-align:center;"><?php echo $resltID['username'] ?></h1>
           <p style="border-bottom: 1px solid black;text-align:center;"> <?php echo $row['commentaire'] ?></p>
    <?php } ?>
    </div>
</div>  
<div style="display:flex;justify-content: center;">
<div style="width:20%;display:flex;justify-content: center;flex-direction:column;">

<form action="productTraitement.php" id="form">
  <label for="comment" style="text-align: center;">Comment</label>
  <input type="text" name="commentValue" id="textValue">
  <?php if($_SESSION['LoginOrNot']): ?>
  <button type="submit" class="btn btn-primary mt-2" name="sbt" >Submit</button>
  <?php endif; ?>
</form>

<?php if(!$_SESSION['LoginOrNot']): ?>
<a href="../Comptes/login.php"><button class="btn btn-info mt-2">Login so you can comment</button></a>
    <?php endif; ?>

</div>
</div>

<div id="editor"></div>

    <script type="text/javascript">

window.onload = function () {
    document.getElementById("generatePDF")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("htmlContent");
            var nomProd = document.getElementById('nomProduit');
            console.log(nomProd.value)
            var opt = {
                margin: 1,
                filename: 'produit.pdf',
                image: { type: 'jpg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>

    <!------------Footer----------->
    
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
    
  </body>
</html>