<?php
session_start();
?>
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
                <a class="nav-link" href="../Page/loginPage.php">Login</a>
            </li>
            <?php
            if (isset($_SESSION['Type'])) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../Page/foodPage.php">Add Item</a>
                        <a class="dropdown-item" href="../Page/drinkPage.php">Delete Item</a>
                        <a class="dropdown-item" href="../Page/drinkPage.php">Edit Item</a>

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

<?php
session_destroy();
?>