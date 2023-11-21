<?php

include_once "../Auth/connection.php";
session_start();

if (!$conn) {
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $editName = $_POST['editName'];
    $editCaption = $_POST['editCaption'];
    $editStock = $_POST['editStock'];
    $id = $_POST['id'];  
    if (!empty($editName) && !empty($editCaption) && !empty($editStock) && is_numeric($editStock)) {
        $query = "UPDATE menu SET Name = '$editName', Caption = '$editCaption', qtt = '$editStock' WHERE id = '$id'";
        if($conn->query($query) === TRUE){
            if($conn->affected_rows > 0){
                echo "Data berhasil diperbarui.";
                echo $id;

            }else{
                echo "Tidak ada data yang diperbarui.";
                echo $id;

            }
        }
    }
    else {
        echo "gal tot";
        exit();
    }
   
}
?>