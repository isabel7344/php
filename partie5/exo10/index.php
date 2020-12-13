<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 5 exo 10</title>
</head>
<body>
    <h1> LES TABLEAUX</h1>
    <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
Cela pourra être, par exemple, de la forme : **"Le département" + nom du département + "a le numéro" + numéro du département**

</p>
 

    <?php
  $départementsHautDeFrance[02] = 'Aisne';
  $départementsHautDeFrance[59] = 'Nord';
  $départementsHautDeFrance[60] = 'Oise';
  $départementsHautDeFrance[62] = 'Pas-de-Calais';
  $départementsHautDeFrance[80] = 'Somme';
  $départementsHautDeFrance[51] = 'Reims';
  foreach ($départementsHautDeFrance as $numéroDépartement => $départementsHautDeFrance) :
    echo('le département ' . $départementsHautDeFrance . ' à le numéro  ' . $numéroDépartement . '<br />');
 endforeach;
?>
    
</body>
</html>