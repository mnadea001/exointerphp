<?php

require '../6/database.php';

// if(in_array('',$_POST)) # On peut aussi utiliser in_array pour vérifier que le tableau est rempli

    if (empty($_POST['line_name']) || empty($_POST['terminus_a']) || empty($_POST['terminus_b']) || empty($_POST['region_corp'])) {
        header('Location:index.php?error=missingInput');
        exit();
    } else {
        $line_name = htmlspecialchars(trim($_POST['line_name']));
        $terminus_a = htmlspecialchars(trim($_POST['terminus_a']));
        $terminus_b = htmlspecialchars(trim($_POST['terminus_b']));
        $region_corp = intval(htmlspecialchars(trim($_POST['region_corp'])));
    }

    try {
        $sqlInsert = 'INSERT INTO lignes (line_name,terminus_a,terminus_b,region_corp) VALUES (:line_name,:terminus_a,:terminus_b,:region_corp)';

        $reqInsert = $db->prepare($sqlInsert);
        $reqInsert->bindValue(':line_name', $line_name, PDO::PARAM_STR);
        $reqInsert->bindValue(':terminus_a', $terminus_a, PDO::PARAM_STR);
        $reqInsert->bindValue(':terminus_b', $terminus_b, PDO::PARAM_STR);
        $reqInsert->bindValue(':region_corp', $region_corp, PDO::PARAM_INT);

        $reqInsert->execute();
        header('Location:index.php?success=insert');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }