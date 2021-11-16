<?php

    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password2'])) {
        header('Location:index.php?error=missingInput');
        exit();
    } else {
        $username = htmlspecialchars(trim($_POST['username']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));
        $password2 = htmlspecialchars(trim($_POST['password2']));
    }

    if (strlen($username) < 3 || strlen($password) < 6) {
        header('Location:index.php?error=inputTooShort');
        exit();
    }

    // if(strlen($password)<6){
    //     header('Location:index.php?error=passwordTooShort');
    //     exit();
    // }

    if ($password === $password2) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT);
        header('Location:index.php?success=authenticated');
    }