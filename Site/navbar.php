<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Electroware</title>

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