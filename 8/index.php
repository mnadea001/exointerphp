<?php
    require '../8/_viewLines.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
    <link rel="stylesheet" href="../3/style.css">

</head>

<body>
    <?php
        include '../4/_navbar.php';
    ?>
    <h1>Exercice 8 : Affichage des données de la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, affichez
        l'ensemble des lignes de transports disponibles dans votre base de données dans un tableau HTML. A chaque ligne
        de transport, il devra y avoir deux actions possibles dans le tableau, éditer et supprimer (Bien que non
        fonctionnelles).</p>
    <small>Il est peut-être temps de définir un mode de récupération par défaut des données par PDO afin d'éviter
        d'avoir un tableau doublé.</small>
    <p><b>Bonus : ajoutez un champ de recherche pour filtrer les résultats par leur nom (A l'aide de l'instruction LIKE
            %recherche% dans une requête SQL)</b></p>

    <form action="" method="get">
        <input type="text" name="search" id="search" placeholder="Rechercher ...">
        <?php
        if (!empty($search)) {
            echo "<h3>Résultats de la recherche : $search</h3>";
            if (empty($lines)) {
                echo 'Aucun résultat trouvé !';
            }
            echo "<a href='index.php'>Retourner aux lignes</a>";
        }
    ?>
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

                <a href=""><button>Editer</button></a>
                <a href=""><button>Supprimer</button></a>
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