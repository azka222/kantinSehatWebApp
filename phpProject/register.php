<?php
    $con = new mysqli('localhost', 'root', '', 'userData');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        if(!empty($name) && !empty($address) && !empty($password)){
            $query = "INSERT INTO nonAdmin (name, address, password) VALUES('$name', '$address', '$password')";
            header('location:registerPage.php');
            mysqli_query($con, $query);
            header('location:registerPage.php?success=Success!');
        }
        else if(empty($name)){
            header('location:registerPage.php?error=Name is required!');
            exit();
        }
        else if(empty($address)){
            header('location:registerPage.php?error=Address is required!');
            exit();
        }
        else if(empty($password)){
            header('location:registerPage.php?error=Password is required!');
            exit(); 
        }
    }
    
    
?>