<?php
include_once "./connection.php";

function sanitizeInput($input){
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = sanitizeInput($_POST['name']);
    $address = sanitizeInput($_POST['address']);
    $password = sanitizeInput($_POST['password']);
    $con_pas = sanitizeInput($_POST['con_pas']);

    // Validate input
    if (empty($name) || empty($address) || empty($password)) {
        header('location:../Page/registerPage.php?error=All fields are required!');
        exit();
    }

    // Validate password match
    if ($con_pas != $password) {
        header('location:../Page/registerPage.php?error=Passwords do not match!');
        exit();
    }

    $len = strlen($password);
    if ($len < 8) {
        header('location:../Page/registerPage.php?error=Password is too short!');
        exit();
    }
    
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    
    if(!password_verify($password,$hashed)){
        header('location:../Page/registerPage.php?error=Internal error occured. Please try again!');
        exit();
    }

    $query = "INSERT INTO nonAdmin (name, address, password) VALUES(?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sss", $name, $address, $hashed);

    if (mysqli_stmt_execute($stmt)) {
        header('location:../Page/registerPage.php?success=Registration successful!');
        exit();
    } else {
        header('location:../Page/registerPage.php?error=Registration failed. Please try again.');
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
