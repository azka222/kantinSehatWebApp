<?php
include_once "./connection.php";

session_start();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $allowedIds = array(20, 25, 26);
        $name = $_POST['name'];
        $password = $_POST['password'];
        $san_pas = filter_var($password, FILTER_SANITIZE_SPECIAL_CHARS);
        if(!empty($name) && !empty($san_pas) && !is_numeric($name)){
            $query = "SELECT * FROM nonAdmin where name = '$name' limit 1";
            $result = $conn->query($query);
            header('location:../Page/loginPage.php');
            if($result->num_rows === 1){
                $userData = $result->fetch_assoc();
                $decrypt = password_verify($san_pas, $userData['password']);
                if($decrypt){
                    $_SESSION['idUser'] = $userData['id'];
                    $_SESSION['name'] = $userData['name'];
                    if(in_array($userData['id'], $allowedIds)){
                        $_SESSION['Type'] = 1;
                    }
                    else{
                        $_SESSION['Type'] = 2;
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