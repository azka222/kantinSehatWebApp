<?php
session_start();
?>

<head>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="#">Kantin Sehat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" action="../Auth/login.php">
            <li class="nav-item">
                <a class="nav-link" href="../Page/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Page/menuPage.php">Menu</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../Page/foodPage.php">Food</a>
                    <a class="dropdown-item" href="../Page/drinkPage.php">Drink</a>

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Page/loginPage.php">Account</a>
            </li>
            <?php
            if (isset($_SESSION['Type']) && $_SESSION['Type'] == 1) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Add Item</a>
                        <a class="dropdown-item" href="#">Delete Item</a>

                    </div>
                </li>
                <?php
            }
            ?>
        </ul>

    </div>
</nav>
<!-- End of Navbar -->