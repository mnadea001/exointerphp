<?php

require 'dev.env.php';

try {
    //* BONUS POINTS
    // $dbString = 'mysql:host=localhost;dbname=transports';

    $dbString = 'mysql:host='.DBHOST.';dbname='.DBNAME;
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    $db = new PDO($dbString, USER, PASS, $options);

    //* Ce sont deux méthodes équivalentes : un array d'erreurs
    // $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)

    // echo 'Connexion établie';
} catch (PDOException $erreur) {
    echo $erreur->getMessage();
}