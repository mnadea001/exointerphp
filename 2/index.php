<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
    <style>
    * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        box-sizing: border-box;
    }

    form {
        display: flex;
        justify-content: center;
        width: 50%;
        flex-direction: column;
        margin-left: auto;
        margin-right: auto;
    }


    input[type=text]:focus,
    input[type=number]:focus {
        border: none;
        border-bottom: 2px solid red;
    }

    input[type=button],
    input[type=submit] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>
</head>
<h1>Exercice 2 : Voiture</h1>
<h2>Formulaire</h2>

<form action="affichage.php" method="post">
    <label for="marque">marque</label>
    <input type="text" name="marque" id="marque">
    <label for="modele">modele</label>
    <input type="text" name="modele" id="modele">
    <label for="couleur">couleur</label>
    <input type="color" name="couleur" id="couleur">
    <label for="kilometrage">kilometrage</label>
    <input type="number" name="kilometrage" id="kilometrage">
    <label for="carburant">carburant</label>
    <input type="text" name="carburant" id="carburant">
    <label for="annee">Annee</label>
    <input type="number" min="1970" name="annee" id="annee">
    <label for="prix">Prix</label>
    <input type="number" min="1" name="prix" id="prix">
    <input type="submit" value="Envoyer">
</form>
</body>

</html>
</body>

</html>