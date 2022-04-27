<?php

$conn = mysqli_connect('localhost','root','','projet-ecomm');

$id = $_GET['edit'];

if (isset($_POST['update_product'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $qt = $_POST['product_quantite'];

    $update_data = "UPDATE produit SET nomProduit='$product_name', prix='$product_price', imageLink='$product_image',Quantite='$qt'  WHERE id = '$id'";
    $upload = mysqli_query($conn, $update_data);
    header('location:admin_page.php');
    
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<span class="message">' . $message . '</span>';
        }
    }
    ?>

    <div class="container">


        <div class="admin-product-form-container centered">

            <?php

            $select = mysqli_query($conn, "SELECT * FROM produit WHERE id = '$id'");
            while ($row = mysqli_fetch_assoc($select)) {

            ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <h3 class="title">update the product</h3>
                    <input type="text" class="box" name="product_name" value="<?php echo $row['nomProduit']; ?>" placeholder="enter the product name">
                    <input type="text" class="box" name="product_quantite" value="<?php echo $row['Quantite']; ?>" placeholder="enter the quantity">
                    <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['Prix']; ?>" placeholder="enter the product price">
                    <input type="text" class="box" value="<?php echo $row['imageLink']; ?>" name="product_image" >
                    <input type="submit" value="update product" name="update_product" class="btn">
                    <a href="admin_page.php" class="btn" style="text-align:center">go back!</a>
                </form>



            <?php }; ?>



        </div>

    </div>

   

</body>

</html>

