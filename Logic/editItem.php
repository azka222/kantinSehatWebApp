<?php

include_once "../Auth/connection.php";
session_start();

// $admin_id = $_SESSION['Type'];
// if($admin_id > 1){
//     header('Location: Logout.php');
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['editName'])) {
        $editName = htmlspecialchars($_POST['idProductName']);
    } else {
        $editName = htmlspecialchars($_POST['editName']);
    }
    if (empty($_POST['editCaption'])) {
        $editCaption = htmlspecialchars($_POST['idProductCaption']);
    } else {
        $editCaption = htmlspecialchars($_POST['editCaption']);
    }
    $editStock = htmlspecialchars($_POST['editStock']);
    $id = htmlspecialchars($_POST['idProduct']);  
    
    $editName = mysqli_real_escape_string($conn, $editName);
    $editCaption = mysqli_real_escape_string($conn, $editCaption);
    $editStock = mysqli_real_escape_string($conn, $editStock);
    $id = mysqli_real_escape_string($conn, $id);

    $query = "UPDATE menu SET Name = ?, Caption = ?, qtt = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssis", $editName, $editCaption, $editStock, $id);

    if (mysqli_stmt_execute($stmt)) {
        if (mysqli_stmt_affected_rows($stmt) == 1) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header('location:../Page/menuPage.php');
            exit();
        } else {
            header('location:../Page/menuPage.php');
        }
    } else {
        echo "Error executing statement: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
