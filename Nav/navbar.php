<!-- <?php
session_start();
?>  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                <a class="nav-link" href="../Page/index.php">Menu<span class="sr-only">(current)</span></a>
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
            <?php
            if (!isset($_SESSION['idUser'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="../Page/loginPage.php">Login</a>
                </li>
                <?php
            } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="../Logic/logout.php">Logout</a>
                </li>
                <?php

            }
            ?>
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
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" id="search">Search</button>
        </form>


    </div>
</nav>
<!-- End of Navbar -->