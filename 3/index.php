<?php
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location:index.php?success=disconnect');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        box-sizing: border-box;
    }

    form {
        display: flex;
        justify-content: center;
        width: 50%;
        flex-direction: column;
        margin-left: auto;
        margin-right: auto;
    }


    input[type=text]:focus,
    input[type=number]:focus {
        border: none;
        border-bottom: 2px solid red;
    }

    input[type=button],
    input[type=submit] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <?php
        include '../4/_navbar.php';
        include_once '../5/_alert.php';
    ?>
    <h1>Exercice 3 : Inscription</h1>
    <p>A l'aide d'un formulaire HTML et de PHP, simulez un formulaire d'inscription (avec hashage du mot de passe)
        via une requête POST sur une page d'affichage et une page de processing. Si la connexion est effective alors on
        affiche un message de bienvenue à l'utilisateur contenant son username.</p>
    <small>Ne pas oublier de préparer le cas où les données sont non renseignées et/ou n'ont pas encore pu être
        remplies. Ne pas oublier d'initialiser la session. (Ici on part du principe qu'on est connectés dès que l'on
        s'inscrit.)</small>
    <small>Afficher le formulaire s'il n'y a pas d'utilisateur connecté.</small>
    <small>Ne pas afficher le formulaire s'il est connecté</small>
    <p><b>BONUS : vérifier que le username fait plus de 3 caractères et que le mot de passe en fait au moins 6</b></p>
    <p><b>BONUS : inclure un lien qui permet de se déconnecter</b></p>
    <ul>
        <li>username</li>
        <li>password</li>
        <li>confirmation password</li>
        <li>email</li>
    </ul>
    <?php

        if (!empty($_SESSION)) {
            ?>
    <div class="container">
        <h1>Bienvenue <?php echo $_SESSION['username']; ?> ❤</h1>
        <p>Ici on fait n'importe quoi : du coup voici tes identifiants</p>
        <small>On a quand même crypté le mot de passe 😉</small>
        <ul>
            <li>username : <?php echo $_SESSION['username']; ?></li>
            <li>email : <?php echo $_SESSION['email']; ?></li>
            <li>password : <?php echo $_SESSION['password']; ?></li>
        </ul>

        <a href="?logout">Déconnecte moi tout de suite c***ard !</a>
    </div>

    <?php
        } else {
            ?>

    <form action="index_post.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username" minlength="2" id="username">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <label for="password2">confirm password</label>
        <input type="password" name="password2" id="password2">
        <input type="submit" value="Envoyer">
    </form>

    <?php
        }
    ?>

    <?php
        include '../4/_footer.php';
    ?>
</body>

</html>