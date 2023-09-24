<?php
session_start();
$con = new mysqli('localhost', 'root', '', 'userData');
if (!$con) {
    die("Connection failed");
}
$drink_query = 'SELECT * FROM Drink';
$drink_result = mysqli_query($con, $drink_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <?php include('../Nav/navbar.php')?>

    <div class="main">
        <div class="d-flex flex-wrap d-flex justify-content-center">
            <?php
            while ($drink_card = mysqli_fetch_assoc($drink_result)) {
                ?>
                <div class="card m-5" style="width: 18rem;">
                    <img class="card-img-top" src="../<?php echo $drink_card['drinkImage']?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $drink_card['drinkName']; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $drink_card['Caption'] ?>
                        </p>
                        <?php include('../Modal/modal.php')?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>