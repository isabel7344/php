<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 5 exo 8</title>
</head>
<body>
    <h1> LES TABLEAUX</h1>
    <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
</p>
 

    <?php
     $monthArray = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
     foreach ($monthArray as $month) :
        echo $month . '<br />';
     endforeach;
?>
    
</body>
</html>