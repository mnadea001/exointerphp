<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
    <link rel="stylesheet" href="../3/style.css">

</head>

<body>
    <?php
        include '../4/_navbar.php';
    ?>
    <h1>Exercice 6 : Connexion à la BDD</h1>
    <p>A partir de vos connaissances, établissez une connexion à une base de données MySQL. VOUS N'UTILISEREZ PAS DE
        CONSTANTES DANS CETTE METHODE, simplement les infos de connexion. Le fichier de connexion ne contiendra que du
        PHP. Cette base de données se nommera transports et contiendra 1 table nommée lignes de 4 colonnes id,nom de
        ligne,terminus a et terminus
        b. Assurez vous d'utiliser PDO lors de l'établissement de la connexion et vérifiez si elle fonctionne.</p>
    <small>Utilisez un système de bloc try/catch afin de réaliser vos opérations SQL.</small>
    <p><b>Bonus : Ajoutez un système de variables d'environnements pour sécuriser la connexion.</b></p>
    <a href="correction.php">Aller à la correction</a>

    <?php
        include '../4/_footer.php';
    ?>
</body>

</html>