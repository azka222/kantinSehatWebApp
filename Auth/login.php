<?php
session_start();
    $con = new mysqli('localhost', 'root', '', 'userData');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $password = $_POST['password'];
        if(!empty($name) && !empty($password) && !is_numeric($name)){
            $query = "SELECT * FROM nonAdmin where name = '$name' limit 1";
            $result = mysqli_query($con, $query);
            header('location:../Page/loginPage.php');
            if($result && mysqli_num_rows($result) > 0){
                $userData = mysqli_fetch_assoc($result);
                $decrypt = password_verify($password, $userData['password']);
                if($decrypt){
                    $_SESSION['id'] = $userData['id'];
                    if($_SESSION['id'] == 20){
                        $_SESSION['Type'] = 'Admin';
                    }
                    header('location:../Page/index.php');
                    die();
                }
            header('location:../Page/loginPage.php?warning=Wrong name or password');
            exit();
            }
            header('location:../Page/loginPage.php?warning=Wrong name or password');
            exit();
            
        }
        else if(empty($name)){
            header('location:../Page/loginPage.php?warning=Name is required!');
            exit(); 
        }
        else if(empty($password)){
            header('location:../Page/loginPage.php?warning=Password is required!');
            exit();
        }
    }
    
?>