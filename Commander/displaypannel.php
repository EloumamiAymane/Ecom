<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();

}
include '../connection.php';
include '../Site/navbar.php';
//include "../Produits/sidebar/sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet"
      />
    <script src="https://kit.fontawesome.com/57a42140fc.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="cart.css">

</head>
<body>

<div class="container">

<section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   
<table class="table table-light">
  <thead>
    <tr>
         <th class="text-center">Produit</th>
         <th class="text-center">Nom</th>
         <th class="text-center">Prix uniter</th>
         <th class="text-center">quantité</th>
         <th class="text-center">prix total</th>
         <th class="text-center">action</th>
    </tr>
  </thead>
  <tbody>
     <?php
     if(!empty($_SESSION['pannel'])):
  foreach($_SESSION['pannel'] as $key=>$value){
    //Pour accer au id de l'article et le donner en parametre de requette

    $select_cart = mysqli_query($conn, "SELECT * FROM produit where id='$key' ");
            
            while ($row = mysqli_fetch_assoc($select_cart)) {
            ?>
<tbody>
    <tr>
      <th scope="row"><img src="<?php echo $row['imageLink'] ?>" class="imgPannel"></th>
      <td class="text-center align-middle"><?php echo $row['nomProduit'] ?></td>
      <td class="text-center align-middle"><?php echo $row['Prix'] ?></td>
      <td class="text-center align-middle" style="position:relative">
      <a href="../Produits/panel.php?updateQuantiter=<?php echo $row['id'] ?>&disincr=false"><input type="button" value="-"></a>
                <input type="text" name="stockCommander" value="<?php echo $_SESSION['pannel'][$key];  ?>" style="width:30px;text-align:center;" disabled>
      <?php if($_SESSION['pannel'][$key]>=$row['Quantite']): ?>
     <input type="button" value="+" disabled>
      <p style="color:red;position:absolute;top:90px;left:55px;" >max-stock</p>
      <?php else: ?>  
      <a href="../Produits/panel.php?updateQuantiter=<?php echo $row['id'] ?>&incr=true"><input type="button" value="+"></a>
        <?php endif ?>
              <br>
              
      
    </td>
      <td class="text-center align-middle"><?php echo $_SESSION['pannel'][$key]*$row['Prix'] ?></td>
      <td class="text-center align-middle">
        <a href="../Produits/panel.php?deletefrompanel=<?php echo $row['id'] ?>">
      <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
      </a></td>
    </tr>
    <?php
            }
          }
        endif;
              ?>
              <tr>
                <td class="text-center" colspan="6">
                  <a href="../Produits/Article.php">
                    <button type="button" class="btn btn-warning w-25 p-3">Back to do shopping?</button>
                  </a>

<?php 
if($_SESSION['LoginOrNot']):
?>
<a href="checkout.php">
<button type="button" class="btn btn-success w-25 p-3">Checkout</button>
</a>
<?php 
else:
?>
<a href="../Comptes/signup.php">
<button type="button" class="btn btn-success w-40 p-3">Create Account to complete your commande</button>
</a>
<?php endif ?>
                </td>
              </tr>
  </tbody>
</table>



</html>