<?php

require '../6/database.php';

    $search = null;
    $corps = $db->query('SELECT * FROM corporate')->fetchAll();