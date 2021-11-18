<?php

require '../6/database.php';

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    if (in_array('', $_POST)) {
        header('Location:../8/index.php?error=missingInput');
        exit();
    } else {
        $line_name = htmlspecialchars(trim($_POST['line_name']));
        $terminus_a = htmlspecialchars(trim($_POST['terminus_a']));
        $terminus_b = htmlspecialchars(trim($_POST['terminus_b']));
        $id = intval(htmlspecialchars(trim($_POST['id'])));
    }

    $getId = explode('=', $_SERVER['HTTP_REFERER'])[1];

    if (!($getId == $id)) {
        header('Location:../8/index.php?error=unauthorizedRequest');
        exit();
    }

    try {
        $sqlEdit = 'UPDATE lignes SET line_name=:line_name,terminus_a=:terminus_a,terminus_b=:terminus_b WHERE id=:id';

        $reqEdit = $db->prepare($sqlEdit);
        $reqEdit->bindValue(':line_name', $line_name, PDO::PARAM_STR);
        $reqEdit->bindValue(':terminus_a', $terminus_a, PDO::PARAM_STR);
        $reqEdit->bindValue(':terminus_b', $terminus_b, PDO::PARAM_STR);
        $reqEdit->bindValue(':id', $id, PDO::PARAM_INT);

        $reqEdit->execute();
        header('Location:../8/index.php?success=edit');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }