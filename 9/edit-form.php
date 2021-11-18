<?php
    require '../9/_viewLine.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
    <link rel="stylesheet" href="../3/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <?php
        include '../4/_navbar.php';
    ?>


    <section class="card-carousel">
        <form class="card-form" action="edit-form_post.php" method="POST">
            <header class="card-header">
                <label for="line_name">Nom de ligne</label>
                <input type="text" class="input-edit" name="line_name" value="<?php echo $line['line_name']; ?>"
                    id="line_name" />
            </header>
            <div class="card-content">
                <label for=" tA">Terminus A</label>
                <input type="text" class="input-edit" name="terminus_a" id="tA"
                    value="<?php echo $line['terminus_a']; ?>" />
                <label for=" tB">Terminus B</label>
                <input type="text" class="input-edit" name="terminus_b" id="tB"
                    value="<?php echo $line['terminus_b']; ?>" />

                <input type="hidden" name="id" value="<?php echo $line['id']; ?>" />
                <button type="submit">Editer</button>
                <a href="../8/index.php"><button>Annuler modifications</button></a>
            </div>
            <div class="card-author">
                <a href="#" class="author-avatar">
                    <img src="https://robohash.org/tbm" alt="avatar" />
                </a>
                <svg class="half-circle" viewBox="0 0 106 57">
                    <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
                </svg>
                <div class="author-name">
                    <div class="author-name-prefix">Author</div>
                    TBM
                </div>
            </div>
        </form>

    </section>

    <?php
        include '../4/_footer.php';
    ?>
</body>

</html>