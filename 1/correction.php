<?php

    if (!empty($_POST)) {
        if (in_array('', $_POST)) {
            echo 'Tous les champs doivent être remplis';
        } else {
            $nom = htmlspecialchars(trim($_POST['nom']));
            $prenom = htmlspecialchars(trim($_POST['prenom']));
            $genre = htmlspecialchars(trim($_POST['genre']));
            $adresse = htmlspecialchars(trim($_POST['adresse']));
            $ville = htmlspecialchars(trim($_POST['ville']));
            $cp = htmlspecialchars(trim($_POST['cp']));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exercice 1 : Identité</h1>
    <p>A l'aide d'un formulaire HTML et de PHP, affichez les données qu'un utilisateur aura rempli dans un formulaire
        via une requête POST SUR LA MEME PAGE</p>
    <small>Ne pas oublier de préparer le cas où les données sont non renseignées et/ou n'ont pas encore pu être
        remplies</small>

    <?php
        if (isset($nom)) {
            ?>
    <ul>
        <li>Nom : <?php echo $nom; ?></li>
        <li>Prénom : <?php echo $prenom; ?></li>
        <li>Genre : <?php echo $genre; ?></li>
        <li>Adresse : <?php echo $adresse; ?></li>
        <li>Ville : <?php echo $ville; ?></li>
        <li>Code Postal : <?php echo $cp; ?></li>
    </ul>

    <?php
        } else {
            ?>

    <ul>
        <li>Nom</li>
        <li>Prénom</li>
        <li>Genre</li>
        <li>Adresse</li>
        <li>Ville</li>
        <li>Code Postal</li>
    </ul>

    <?php
        }
    ?>

    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre">
        <label for="Adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse">
        <label for="ville">ville</label>
        <input type="text" name="ville" id="ville">
        <label for="cp">Code Postal</label>
        <input type="text" name="cp" id="cp">
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>