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
            <form action="../Auth/register.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-warning" role="alert">
                        <a>
                            <?php echo $_GET['error']; ?>
                        </a>
                    </div>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <a>
                            <?php echo $_GET['success']; ?>
                        </a>
                    </div>

                <?php } ?>
                <input type="text" class="fadeIn second" name="name" id="name" placeholder="name">
                <input type="text" class="fadeIn second" name="address" id="address" placeholder="address">
                <input type="password" class="fadeIn third" id="password" name="password" placeholder="password">
                <input type="password" class="fadeIn third" id="con_pas" name="con_pas" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Register">
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="loginPage.php">Back to login page</a>
            </div>
        </div>
    </div>


</body>

</html>