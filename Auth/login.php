<?php
include_once "./connection.php";

session_start();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $allowedIds = array(20, 25, 26);
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        if(!empty($name) && !empty($password) && !is_numeric($name)){
            // echo `{$name} {$password}`;
            $query = "SELECT * FROM nonAdmin where name = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $name);
            $stmt->execute();

            $result = $stmt->get_result();
            header('location:../Page/loginPage.php');

            if($result->num_rows === 1){
                $userData = $result->fetch_assoc();
                $decrypt = password_verify($password, $userData['password']);
                if($decrypt){
                    $_SESSION['idUser'] = $userData['id'];
                    $_SESSION['name'] = $userData['name'];
                    if(in_array($userData['id'], $allowedIds)){
                        $_SESSION['Type'] = 1;
                    }
                    else{
                        $_SESSION['Type'] = 2;
                    }
                    unset($userData['password']);
                    header('location:../Page/index.php');
                    die();
                }
            header('location:../Page/loginPage.php?warning=Wrong  password');
            exit();
            }
            header('location:../Page/loginPage.php?warning=Wrong name ');
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

<!-- $query = "SELECT * FROM Users WHERE username = ? AND password = ?;";
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();
$db->close();

if($result->mysqli_num_rows == 1){
    $row = result->fetch_assoc();
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$sanitize = filter_var($password, FILTER_SANITIZE_SPECIAL_CHARS);

$sanitize = htmlspecialchars($password) -->