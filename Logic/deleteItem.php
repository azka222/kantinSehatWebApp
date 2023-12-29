<?php

include_once "../Auth/connection.php";
session_start();

$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = $_POST['delete'];

    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
        echo "Token csrf tidak valid";
        exit();
    }   
    $id = filter_var($_POST['delete'], FILTER_VALIDATE_INT);
    if($id == false){
        echo "ID tidak valid";
        exit();
    }

    $query = "DELETE FROM menu WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Data berhasil dihapus";
        } else {
            echo "Tidak ada data yang dihapus";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

    header('location:../Page/index.php');
    exit();
}
?>
