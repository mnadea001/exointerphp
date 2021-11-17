<?php

$alert = false;
if (!empty($_GET)) {
    $alert = true;
    if (!empty($_GET['error'])) {
        $color = 'crimson';
        $message = 'Erreur';
        if ('missingInput' == $_GET['error']) {
            $message = 'Tous les champs doivent être remplis';
        }
    }
    if (!empty($_GET['success'])) {
        $color = 'greenyellow';
        $message = 'Succès';
        if ('insert' == $_GET['success']) {
            $message = 'Ligne ajouté dans la BDD';
        }
    }
}

if ($alert) {
    echo "<div style='background-color:$color;height:45px;text-align:center;'>$message</div>";
}