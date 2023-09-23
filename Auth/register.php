<?php
session_start();
    $con = new mysqli('localhost', 'root', '', 'userData');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        if(!empty($name) && !empty($address) && !empty($password)){
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO nonAdmin (name, address, password) VALUES('$name', '$address', '$hashedPassword')";
            header('location:../Page/registerPage.php');
            mysqli_query($con, $query);
            header('location:../Page/registerPage.php?success=Success!');
        }
        else if(empty($name)){
            header('location:../Page/registerPage.php?error=Name is required!');
            exit();
        }
        else if(empty($address)){
            header('location:../Page/registerPage.php?error=Address is required!');
            exit();
        }
        else if(empty($password)){
            header('location:../Page/registerPage.php?error=Password is required!');
            exit(); 
        }
    }
    
    
?>