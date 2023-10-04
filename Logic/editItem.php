<?php
session_start();
$con = new mysqli('localhost', 'root', '', 'userData');
if (!$con) {
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $editName = $_POST['editName'];
    $editCaption = $_POST['editCaption'];
    $editStock = $_POST['editStock'];
    if (!empty($editName) && !empty($editCaption) && !empty($editStock) && is_numeric($editStock)) {
        $query = "UPDATE Menu SET Name = '$editName', Caption = '$editCaption', qtt = '$editStock' WHERE id = ".$_SESSION['id'];
        mysqli_query($con, $query);
        header('Location: ../Page/index.php');
    }
    else {
        exit();
    }
   
}
?>