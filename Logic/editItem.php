<?php
// session_start();
// $con = new mysqli('localhost', 'root', '', 'userData');
// if (!$con) {
//     die();
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $editName = $_POST[$_SESSION['Name']];
//     $editCaption = $_POST[$_SESSION['Caption']];
//     $editStock = $_POST[$_SESSION['qtt']];
//     if (!empty($editName) && !empty($editCaption) && !empty($editStock) && is_numeric($editStock)) {
//         $query = "UPDATE Menu SET Name = '$editName', Caption = '$editCaption', Stock = '$editStock' WHERE id = ".$_SESSION['id'];
//         header('Location: ../Page/index.php');
//         mysqli_query($con, $query);
//     }
//     else {
//         exit();
//     }
   
// }
?>