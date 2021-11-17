<?php

    if (!empty($_POST)) {
        if (in_array('', $_POST)) {
            header('Location:index.php?missingInput');
            exit();
        } else {
            $marque = htmlspecialchars(trim($_POST['marque']));
            $modele = htmlspecialchars(trim($_POST['modele']));
            $couleur = htmlspecialchars(trim($_POST['couleur']));
            $kilometrage = htmlspecialchars(trim($_POST['kilometrage']));
            $carburant = htmlspecialchars(trim($_POST['carburant']));
            $annee = htmlspecialchars(trim($_POST['annee']));
            $prix = htmlspecialchars(trim($_POST['prix']));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>
    <?php
        include '../4/_navbar.php';
    ?>
    <h1>Exercice 2 : Voiture</h1>
    <h2>Affichage des résultats</h2>

    <ul>
        <li>Marque : <?php echo $marque; ?></li>
        <li>Modèle : <?php echo $modele; ?></li>
        <li>Couleur : <input type="color" value="<?php echo $couleur; ?>" id="colorWell"></li>
        <li>Kilométrage : <?php echo $kilometrage; ?> km</li>
        <li>Carburant : <?php echo $carburant; ?></li>
        <li>Annee : <?php echo $annee; ?></li>
        <li>Prix : <?php echo $prix; ?> €</li>
    </ul>

    <a href="index.php">Retour au formulaire</a>

    <?php
        include '../4/_footer.php';
    ?>
</body>

</html>