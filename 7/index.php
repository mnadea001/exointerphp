<?php
    require '../7/_viewCorp.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
    <link rel="stylesheet" href="../3/style.css">

</head>

<body>
    <?php
        include '../4/_navbar.php';
        include_once '../5/_alert.php';
    ?>
    <h1>Exercice 7 : Ajout simple à la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, utilisez un
        formulaire pour ajouter des nouvelles lignes de transport dans la base de données. Vous pourrez vous inspirer du
        réseau de transports de votre choix.</p>
    <small>Utilisez un système de bloc try/catch afin de réaliser vos opérations SQL.Sécurisez le tout avec des requêtes
        préparées.</small>
    <p><b>Bonus : Ajoutez des messages d'erreur dans le système pour renforcer l'expérience utilisateur</b></p>

    <form action="index_post.php" method="post">
        <label for="line_name">Nom de la ligne</label>
        <input type="text" name="line_name" id="line_name">
        <label for="terminus_a">Terminus A</label>
        <input type="text" name="terminus_a" id="terminus_a">
        <label for="terminus_b">Terminus B</label>
        <input type="text" name="terminus_b" id="terminus_b">
        <label for="osef">Société de transports</label>
        <select name="region_corp" id="osef">
            <?php
                foreach ($corps as $corp) {
                    echo "<option value='{$corp['corporate_id']}'>{$corp['label']}</option>";
                }
            ?>
        </select>
        <input type="submit" value="Envoyer">
    </form>


    <?php
        include '../4/_footer.php';
    ?>
</body>

</html>