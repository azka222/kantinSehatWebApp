<?php session_start();?>
<div class="card m-5" style="width: 18rem;">
    <img class="card-img-top" src="../<?php echo $_SESSION['Img'] ?>">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_SESSION['Name']; ?>
        </h5>
        <p class="card-text">
            <?php echo $_SESSION['Caption'] ?>
        </p>
        
        <?php include('../Modal/modal.php');
        ?>
    </div>
</div>
