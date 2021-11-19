<?php

    $search = null;
    $lines = $db->query('SELECT * FROM lignes  INNER JOIN corporate ON lignes.region_corp = corporate.corporate_id')->fetchAll();

    if (isset($_GET['corporate'])) {
        $region_corp = intval(htmlspecialchars(trim($_GET['corporate'])));
        $req = $db->prepare('SELECT * FROM lignes  INNER JOIN corporate ON lignes.region_corp = corporate.corporate_id WHERE region_corp = :region_corp');
        $req->bindValue(':region_corp', $region_corp);
        $req->execute();
        $lines = $req->fetchAll();
    }

    // if (isset($_GET['search'])) {
    //     $search = htmlspecialchars(trim($_GET['search']));
    //     $sql = 'SELECT * FROM lignes WHERE line_name LIKE :search OR terminus_a LIKE :search OR terminus_b LIKE :search';
    //     $reqLines = $db->prepare($sql);
    //     $reqLines->bindValue(':search', "%$search%");
    //     $reqLines->execute();
    //     $lines = $reqLines->fetchAll();
    // }