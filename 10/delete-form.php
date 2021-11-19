<?php
//* On aura besoin d'afficher les infos d'une SEULE ligne, mais surtout on aura besoin de récupérer son ID.

//* _viewLine est le fichier qui permet d'afficher les infos d'un seul élément.
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

    <!-- La partie voulez-vous ... consiste a rajouter des éléments d'UX. -->
    <h2>Voulez-vous supprimer cet élément ?</h2>
    <h3><?php echo $line['line_name']; ?></h3>
    <p><?php echo $line['terminus_a']; ?></p>
    <p><?php echo $line['terminus_b']; ?></p>
    <!-- On aura besoin uniquement d'un formulaire qui contient l'id et un bouton submit -->
    <form action="delete-form_post.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $line['id']; ?>">
        <button type="submit">Confirmer</button>
        <a href="../8/index.php">Annuler</a>
    </form>
    <!-- Notre formulaire sera envoyé sur une page _post -->

    <?php
        include '../4/_footer.php';
    ?>
</body>

</html>