<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
    <link rel="stylesheet" href="../3/style.css">

</head>

<body>
    <?php
    require_once '../4/_navbar.php';
    include_once '../5/_alert.php';
    ?>
    <h1>Exercice 5 : Messages d'erreur via requête GET</h1>
    <p>A l'aide de manipulation des requêtes GET, créez un système d'alerte qui se base sur les requêtes reçues dans
        l'URL pour afficher l'état de fonctionnement de l'application. Ajoutez le sur les exercices précédents.(CONSEIL
        : utilisez un fragment de page pour l'inclure partout plus rapidement).</p>
    <small>Ne pas oublier les conventions de nommage de fragments. Utilisez un système logiquement lors de l'affichage
        des requêtes GET (error,warning,success par exemple)</small>
    <a href="?error=try">Essayer Erreur</a>
    <a href="?success=try">Essayer Succès</a>
    <?php
    require '../4/_footer.php';
    ?>
</body>

</html>