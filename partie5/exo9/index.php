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
      $départementsHautDeFrance[02] = 'Aisne';
      $départementsHautDeFrance[59] = 'Nord';
      $départementsHautDeFrance[60] = 'Oise';
      $départementsHautDeFrance[62] = 'Pas-de-Calais';
      $départementsHautDeFrance[80] = 'Somme';
      $départementsHautDeFrance[51] = 'Reims';
     foreach ($départementsHautDeFrance as $value => $départementsHautDeFrance) :
        echo $départementsHautDeFrance . ' a la valeur ' . $value . '<br />';
     endforeach;
?>
    
</body>
</html>