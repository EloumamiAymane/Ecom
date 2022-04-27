<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginSTYLE.css">
</head>

<body>



    <?php include 'AdminControle.php'; ?>

    <div id="ContainerLogin">
        <form action="" method="post" id="formLogin">
                <h1>Admin Page</h1>
                <label for="username" >Username</label>
                <input type="text" class="inputBAR" name="username" required>
                <label for="password">Password</label>
                <input type="password" class="inputBAR" name="password" required>
                <button name="login" id="buttonLogin">Login</button>
                
                <?php if(!$_SESSION['foundINFO']){ ?>
                <h1 style="color:red;
                ">Invalid Information</h1>
            <?php  }
            ?>
        </form>

    </div>


    <script src="signupJsControle.js"></script>
</body>

</html>