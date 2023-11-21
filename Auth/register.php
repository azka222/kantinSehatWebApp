<?php
    $con = new mysqli('localhost', 'root', '', 'userData');
    if(!$con){
        die();
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $san_pas =htmlspecialchars($password);
        $con_pas = $_POST['con_pas'];
        $len = strlen($password);
        if(!empty($name) && !empty($address) && !empty($password)){
            if($con_pas != $password){
                header('location:../Page/registerPage.php?error=Password not match!');
                exit();
            }
            else if($len < 8){
                header('location:../Page/registerPage.php?error=Password is too short!');
                exit();
            }
            else{
                $hashed = password_hash($san_pas, PASSWORD_DEFAULT);
                $query = "INSERT INTO nonAdmin (name, address, password) VALUES('$name', '$address', '$hashed')";
                mysqli_query($con, $query);
                header('location:../Page/registerPage.php');
                header('location:../Page/registerPage.php?success=Success!');
                
            }
   
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