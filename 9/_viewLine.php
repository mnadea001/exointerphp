<?php

require '../6/database.php';

$id = htmlspecialchars(trim($_GET['id']));

        $sql = 'SELECT * FROM lignes WHERE id=:id';
        $reqLine = $db->prepare($sql);
        $reqLine->bindValue(':id', $id);
        $reqLine->execute();
        $line = $reqLine->fetch();