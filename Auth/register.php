<?php
include_once "./connection.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $con_pas = $_POST['con_pas'];

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

    $san_pas = htmlspecialchars($password);
    $hashed = password_hash($san_pas, PASSWORD_DEFAULT);

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
