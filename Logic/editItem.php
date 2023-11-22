<?php

include_once "../Auth/connection.php";
session_start();

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
    
    // Menggunakan mysqli_real_escape_string untuk mengamankan variabel yang digunakan dalam kueri SQL
    $editName = mysqli_real_escape_string($conn, $editName);
    $editCaption = mysqli_real_escape_string($conn, $editCaption);
    $editStock = mysqli_real_escape_string($conn, $editStock);
    $id = mysqli_real_escape_string($conn, $id);
    
    if (!empty($editStock) && is_numeric($editStock)) {
        // Menggunakan prepared statement
        $query = "UPDATE menu SET Name = ?, Caption = ?, qtt = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssis", $editName, $editCaption, $editStock, $id);
        if(mysqli_stmt_execute($stmt)){
            if(mysqli_stmt_affected_rows($stmt) == 1){
                header('location:../Modal/modal.php');
                exit();
            }
        }

        // Tutup prepared statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Masukkan data yang akan diperbarui.";
        exit();
    }
   
    // Tutup koneksi
    mysqli_close($conn);
}
?>
