<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'projet-ecomm');

//$message = array();  

if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $product_img = $_POST['product_img'];
    $product_description = $_POST['product_description'];
    $genrecat = $_POST['product_marque'];

            $conn->query("INSERT INTO produit (nomProduit, imageLink,Descriptions,Quantite, Prix,idcatalogue) VALUES ('$product_name', '$product_img', '$product_description', '$product_quantity','$product_price','$genrecat') ") or die($conn->error);
            header('location: admin_page.php');     
        
};


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
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/57a42140fc.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css" />
    <!--icon set up-->
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size:20px;position:fixed;width:100%;">
    <div class="container-fluid">
        
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto justify-content-center tst">
                <li> <a class="nav-link active" href="#" style="margin-left:35px" > ajouter des produits </a> </li>
                <li> <a href="#Gestion-des-produit" class="nav-link active" style="margin-left:35px"> Gestion des produits </a> </li>
                <li> <a href="#Gestion-des-comptes" class="nav-link active" style="margin-left:35px"> Gestion des comptes </a> </li>
                <li> <a href="#Gestion-des-commandes" class="nav-link active" style="margin-left:35px">Gestion des commandes</a> </li>
                
                </li>
            </ul>

            
        </div>
    </div>


</nav>
<body>


    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '<span class="message">' . $message . '</span>';
        }
    }

    ?>


    <div class="container">
        <div class="admin-product-form-container" style="margin-top:100px">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <h3>ajouter un produit</h3>
                <input type="text" placeholder="entrer le nom du produit" name="product_name" class="box">
                <input type="number" placeholder="entrer le prix du produit" name="product_price" class="box">
                <input type="text" name="product_img" class="box" placeholder="le lien de l'image">
                <input type="number" placeholder="entrer la quantité du produit" name="product_quantity" class="box">
                <input type="text" placeholder="entrer la description du produit" name="product_description" class="box">
                <input type="text" placeholder="id Catalogue" name="product_marque" class="box">
                <input type="submit" value="Ajouter" name="add_product" class="btnn">
            </form>
        </div>

    </div>
    <?php

    $select = mysqli_query($conn, " SELECT * FROM produit") or die($conn->error);

    ?>
    <h1 style="text-align:center;margin-top:200px;font-size:35px;margin-bottom:100px" id="Gestion-des-produit">Gestion des produits</h1>
    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <th>product image</th>
                    <th>product name</th>
                    <th>product price</th>
                    <th>quantite</th>
                    <th>Categorie</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                <tr>
                    <td><img src="<?php echo $row['imageLink']; ?>" height="100" alt=""></td>
                    <td><?php echo $row['nomProduit']; ?></td>
                    <td><?php echo $row['Prix']; ?>$</td>
                    <td><?php echo $row['Quantite']; ?> </td>
                    <td><?php echo $row['idcatalogue']; ?></td>
                    <td>
                        <a href="admin_update.php?edit=<?php echo $row['id']; ?>" > <i class="fas fa-edit"></i> edit </a>
                        <a href="delete.php?delete=<?php echo $row['id']; ?>" class="btnn"> <i class="fas fa-trash"></i> delete </a>
                    </td>

                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    </div>


    <?php

    $select = mysqli_query($conn, " SELECT * FROM client");

    ?>

        <h1 id="Gestion-des-comptes" style="text-align:center;margin-top:200px;font-size:35px;margin-bottom:100px">Gestion des comptes</h1>

    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>phoneNumber</th>
                    <th>City</th>
                    <th>Alert</th>
                    <th>action</th>
                </tr>
            </thead>
            
            <?php while(($row = mysqli_fetch_assoc($select))) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?> </td>
                    <td><?php echo $row['phoneNumber']; ?></td>
                    <td><?php echo $row['City']; ?></td>
                    <td><?php echo $row['Alert']; ?></td>

                    <td>
                        <a href="alert.php?alert=<?php echo $row['id']; ?>" > <i class="fas fa-edit"></i> Alert </a>
                        <a href="delete.php?deleteCompte=<?php echo $row['id']; ?>" class="btnn"> <i class="fas fa-trash"></i> delete </a>
                    </td>

                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</div>

<h1 class="heading" id="Gestion-des-commandes" style="text-align:center;margin-top:200px;font-size:35px;margin-bottom:100px">Gestion des commandes</h1>
<?php 
$requette = $conn->query("SELECT * FROM commandes")

?>
   
<table class="table table-light" style="font-size:17px">
  <thead>
    <tr>
         <th class="text-center">Id</th>
         <th class="text-center">email</th>
         <th class="text-center">Numbers</th>
         <th class="text-center">Method</th>
         <th class="text-center">State</th>
         <th class="text-center">Zip</th>
         <th class="text-center">Quantiter</th>
         <th class="text-center">Price</th>
         <th class="text-center">Id client</th>
         <th class="text-center">Id produit</th>
         <th class="text-center">State Of Order</th>
         <th class="text-center">Action</th>

    </tr>
  </thead>
  <tbody>
     <?php  
            while ($row = mysqli_fetch_assoc($requette)) {
            ?>
<tbody>
    <tr>
      <td class="text-center align-middle"><?php echo $row['id'] ?></td>
      <td class="text-center align-middle"><?php echo $row['email'] ?></td>
      <td class="text-center align-middle"><?php echo $row['numbers'] ?></td>
      <td class="text-center align-middle"><?php echo $row['method'] ?></td>
      <td class="text-center align-middle"><?php echo $row['states'] ?> </td>
      <td class="text-center align-middle"><?php echo $row['zip'] ?></td>
      <td class="text-center align-middle"><?php echo $row['totalProduct'] ?></td>
      <td class="text-center align-middle"><?php echo $row['totalPrice'] ?></td>
      <td class="text-center align-middle"><?php echo $row['idclient'] ?></td>
      <td class="text-center align-middle"><?php echo $row['idproduit'] ?></td>
      <td class="text-center align-middle"><?php echo $row['stateOfOrder'] ?></td>
   

      <td class="text-center align-middle" style="display:flex;flex-direction:column;">
        <a href="stateCommande.php?setStateCommandes=<?php echo $row['id'] ?>&valid=true&quantiter=<?php echo $row['totalProduct'] ?>" style="text-decoration:none;">
      <button type="button" class="btn btn-success btnnn">Valide</button></a>
      <a href="stateCommande.php?setStateCommandes=<?php echo $row['id'] ?>&valid=false" style="text-decoration:none;">
      <button type="button" class="btn btn-info btnnn">Invalide</button>
      </a>
      <a href="stateCommande.php?setStateCommandes=<?php echo $row['id'] ?>&valid=supprimer" style="text-decoration:none;">
      <button type="button" class="btn btn-danger btnnn">Delete</button>
      </a>
        </a>
       </td>
    </tr>
    <?php
            }
              ?>
             
  </tbody>
</table>
</body>

</html>