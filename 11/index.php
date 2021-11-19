<?php
    require '../7/_viewCorp.php';
    require '../11/_viewLinesFromCorp.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11</title>
    <link rel="stylesheet" href="../3/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <?php
        include '../4/_navbar.php';
    ?>
    <h1>Exercice 11 : Affichage selon critères</h1>

    <form action="" method="get">
        <select name="corporate" id="osef">
            <?php
                foreach ($corps as $corp) {
                    echo "<option value='{$corp['corporate_id']}'>{$corp['label']}</option>";
                }
                ?>
        </select>
        <input type="submit" value="Filtrer">
    </form>

    <section class="card-carousel">
        <?php
            foreach ($lines as $line) {
                ?>
        <article class="card-item">
            <header class="card-header">
                <h2><?php echo $line['line_name']; ?></h2>
            </header>
            <div class="card-content">
                <p>Terminus A : <?php echo $line['terminus_a']; ?></p>
                <p>Terminus B : <?php echo $line['terminus_b']; ?></p>

                <a href="../9/edit-form.php?id=<?php echo $line['id']; ?>"><button>Editer</button></a>
                <a href="../10/delete-form.php?id=<?php echo $line['id']; ?>"><button>Supprimer</button></a>
                <form action="../10/delete-form_post.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $line['id']; ?>">
                    <button type="submit">Supprimer instantanément</button>
                </form>
            </div>
            <div class="card-author">
                <a href="#" class="author-avatar">
                    <img src="https://robohash.org/<?php echo $line['label']; ?>" alt="avatar" />
                </a>
                <svg class="half-circle" viewBox="0 0 106 57">
                    <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
                </svg>
                <div class="author-name">
                    <div class="author-name-prefix">Société</div>
                    <?php echo $line['label']; ?>
                </div>
            </div>
        </article>
        <?php
            }
        ?>

    </section>

    <?php
        include '../4/_footer.php';
    ?>
</body>

</html>