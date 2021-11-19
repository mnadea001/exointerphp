<?php

require '../6/database.php';

    $search = null;
    $lines = $db->query('SELECT * FROM lignes INNER JOIN corporate ON lignes.region_corp = corporate.corporate_id')->fetchAll();

    if (isset($_GET['search'])) {
        $search = htmlspecialchars(trim($_GET['search']));
        $sql = 'SELECT * FROM lignes WHERE line_name LIKE :search OR terminus_a LIKE :search OR terminus_b LIKE :search';
        $reqLines = $db->prepare($sql);
        $reqLines->bindValue(':search', "%$search%");
        $reqLines->execute();
        $lines = $reqLines->fetchAll();
    }