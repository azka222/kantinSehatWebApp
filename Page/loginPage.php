<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div id="boxImg">
                <img src="../Images/kantin.jpeg" class="img-fluid" alt="Responsive image">
            </div>
            <!-- Login Form -->
            <form action="../Auth/login.php" method="post">
                <?php if (isset($_GET['warning'])) { ?>
                    <div class="alert alert-warning" role="alert">
                        <a>
                            <?php echo $_GET['warning']; ?>
                        </a>
                    </div>
                <?php } ?>

                <input type="text" id="name" class="fadeIn second" name="name" placeholder="Name">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="registerPage.php">Don't have an account?</a>
            </div>

        </div>
    </div>
</body>

</html>