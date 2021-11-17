<?php

$alert = false;
if (!empty($_GET)) {
    $alert = true;
    if (isset($_GET['error'])) {
        $color = 'red';
        $message = "Une erreur s'est produite";
    }
    if (isset($_GET['success'])) {
        $color = 'greenyellow';
        $message = 'Opération réussie';
    }
}

if ($alert) {
    echo "<div style='background-color:$color;height:45px;text-align:center;'>$message</div>";
}