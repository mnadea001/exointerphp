<!-- <ul>
    <li><a href="../1/">Exo 1</a></li>
    <li><a href="../2/">Exo 2</a></li>
    <li><a href="../3/">Exo 3</a></li>
    <li><a href="../4/">Exo 4</a></li>
    <li><a href="../5/">Exo 5</a></li>
</ul> -->

<?php

$folders = array_slice(scandir('../'), 3);
?>

<nav>
    <ul>
        <li> Navigation exos</li>
        <?php
            foreach ($folders as $unit) {
                if (is_dir("../$unit")) {
                    echo "<li><a href='../$unit/index.php'>Exo $unit</a></li>";
                }
            }
        ?>
    </ul>
</nav>