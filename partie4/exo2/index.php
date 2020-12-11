<?php
$hello ='bonjour ça va ?'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 Exo2 </title>
</head>
<body>
<p>
Les fonctions
Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
</p>

<?php

function exo2($manger)
{
      return $manger;  
}
echo exo2('pizza');  
?>
</body>
</html>