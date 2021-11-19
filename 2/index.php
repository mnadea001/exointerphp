<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
    <link rel="stylesheet" href="../3/style.css">

</head>

<body>

    <?php
        include '../4/_navbar.php';
        include_once '../5/_alert.php';
    ?>
    <h1>Exercice 2 : Voiture</h1>
    <h2>Formulaire</h2>

    <form action="affichage.php" method="post">
        <label for="marque">marque</label>
        <input type="text" name="marque" id="marque">
        <label for="modele">modele</label>
        <input type="text" name="modele" id="modele">
        <label for="couleur">couleur</label>
        <input type="color" name="couleur" id="couleur">
        <label for="kilometrage">kilometrage</label>
        <input type="number" name="kilometrage" id="kilometrage">
        <label for="carburant">carburant</label>
        <input type="text" name="carburant" id="carburant">
        <label for="annee">Annee</label>
        <input type="number" min="1970" name="annee" id="annee">
        <label for="prix">Prix</label>
        <input type="number" min="1" name="prix" id="prix">
        <input type="submit" value="Envoyer">
    </form>
    <?php
        include '../4/_footer.php';
    ?>
</body>

</html>