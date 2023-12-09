<?php
    include './config/Database.php';
    include './class/User.php';
    session_start();
    $database = new Database();
    $conn = $database->getConnection();
    $user = new User($conn);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $data = $user->login();
        if ($data) {
            $_SESSION['isLogined'] = true;
            unset($_SESSION['errorMessage']);
            header('Location: dashboard.php');
        }
        else {
            $_SESSION['isLogined'] = false;
            $_SESSION['errorMessage'] = 'Invalid email or password';
            header('Location: login.php');
        }
    }

?>