<?php

include_once "../Auth/connection.php";
session_start();

// $admin_id = $_SESSION['Type'];
// if($admin_id !== 1){
//     header('Location: Logout.php');
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = $_POST['delete'];
    
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
