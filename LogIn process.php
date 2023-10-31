<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = unserialize(file_get_contents('users.txt'));

    if ($users) {
        foreach ($users as $user) {
            if ($user['email'] === $email && password_verify($password, $user['password'])) {
                
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $user['role'];

                
                if ($user['role'] === 'admin') {
                    header('Location: admin_dashboard.php');
                } elseif ($user['role'] === 'manager') {
                    header('Location: manager_dashboard.php');
                } else {
                    header('Location: user_dashboard.php');
                }

                exit();
            }
        }
    }

    
    header('Location: login.php?error=1');
}