<?php

require '../6/database.php';

//! La suppresion ne requiert qu'un ID donc il faut rajouter des sécurités suffisantes, afin de ne pas autoriser la suppresion depuois n'importe où, ou par n'importe qui.

    $id = intval(htmlspecialchars(trim($_POST['id'])));

    //! Dans un souci de sécurité on va vérifier si l'ID du formulaire précédent (input hidden), est le même que celui de la page du formulaire($_GET).

    //? Pour la suppression instantané, on a mis un if autour de la requête GET, MAIS CE N'EST PAS SECURISE DU TOUT.
    if (isset($_GET['id'])) {
        $getId = explode('=', $_SERVER['HTTP_REFERER'])[1];

        if (!($getId == $id)) {
            header('Location:../8/index.php?error=unauthorizedRequest');
            exit();
        }
    }

    //? Un autre type de vérification nécessaire
    //* If CSRF Token is Valid

    //* Un bloc trycatch pour avoir les erreurs SQL/PDO
    try {
        //* Une requête de suppression via une requête préparée en PDO
        $sqlDelete = 'DELETE FROM lignes WHERE id=:id';

        $reqDelete = $db->prepare($sqlDelete);
        $reqDelete->bindValue(':id', $id, PDO::PARAM_INT);

        $reqDelete->execute();
        header('Location:../8/index.php?success=delete');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }