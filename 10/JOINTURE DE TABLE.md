# Ajouter une table

On a souhaité réaliser une jointure de table pour nos lignes et nous avons du créer une table corporate qui contiendrait les entreprises qui sont détentrices de ces lignes de transports.

Cette table possède deux colonnes _corporate_id et label_ qui servent à identifier les sociétés par leur nom et un id correspondant.

Pour réaliser la jointure, il nous faudra une colonne correspondante dans notre table. On crée une nouvelle colonne qui s'appelle **region_corp** . Cette colonne consistera en un id, donc c'est un type INT.

Afin de réaliser la jointure effectivement, il faudra désormais rajouter une contrainte de type foreign_key sur notre colonne vers la nouvelle table.

Il existe deux méthodes (globalement) pour le faire.

### Méthode °1 : phpMyAdmin

Sur PHPMyAdmin, dans l'onglet structure de notre table lignes, il existe un sous-onglet "Vue Relationelle". Ce sous-onglet permettra de définir notre jointure.
Il faudra ouvrir Vue Relationelle, sélectionner notre colonne (region_corp) dans le menu déroulant servant à ajouter une nouvelle relation et dans les menus déroulants suivants (à sa droite) choisir la BDD/table/colonne correspondant (transports/corporate/corporate_id). En enregistrant, nous aurons désormais notre jointure.

### Méthode N°2 : ALERT TABLE/CREATE TABLE.

EN utilisant une requête SQL, on peut aussi rajouter cette contrainte (et c'est d'ailleurs plus simple ainsi).

Dans le cas où ma table est déja crée, il faudra que j'utilise ALTER TABLE, sinon j'utiliserais CREATE TABLE.

J'exécute la requete suivante :

```
ALTER TABLE lignes
ADD FOREIGN KEY (region_corp) REFERENCES corporate(corporate_id);
```

Cette requête ajoutera donc ma jointure.

## Utilisation de la jointure.

Désormais pour récupérer mes champs, je devrais utiliser des requêtes contenant INNER JOIN corporate ON lignes.region_corp = corporate.corporate_id afin de tout récupérer.

Lors d'une insertion ou d'une édition d'une ligne (dans lignes), je n'ai besoin de renseigner **QUE** l'id de region_corp auquel corporate_id doit correspondre, je n'ai pas besoin de faire d'insertion dans les deux tables pour ajouter un élément dans lignes.

**ATTENTION : Dans le cas où il existe des éléments orphelins dans la BDD, il faudra soit définir le champ sur NULL (en gros il peut être null) soit leur donner une valeur au préalable MEME SI LA JOINTURE N'EST PAS ENCORE REALISEE. A cause des principes ACID des BDD, MySQL ne pourra pas créer de jointures si les éléments deviendront problématiques dans le cas de leur réussite.**
