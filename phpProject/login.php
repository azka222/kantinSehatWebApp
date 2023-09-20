<?php
session_start();
    $con = new mysqli('localhost', 'root', '', 'userData');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $password = $_POST['password'];
        if(!empty($name) && !empty($password) && !is_numeric($name)){
            $query = "SELECT * FROM nonAdmin where name = '$name' limit 1";
            $result = mysqli_query($con, $query);
            header('location:loginPage.php');
            if($result && mysqli_num_rows($result) > 0){
                $userData = mysqli_fetch_assoc($result);
                
                if($userData['password'] === $password){
                    $_SESSION['id'] = $userData['id'];
                    header('location:index.php');
                    die();
                }
            header('location:loginPage.php?warning=Wrong name or password');
            exit();
            }
            header('location:loginPage.php?warning=Wrong name or password');
            exit();
            
        }
        else if(empty($name)){
            header('location:loginPage.php?warning=Name is required!');
            exit(); 
        }
        else if(empty($password)){
            header('location:loginPage.php?warning=Password is required!');
            exit();
        }
    }
    
?>