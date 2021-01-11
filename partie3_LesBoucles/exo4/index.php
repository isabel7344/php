<?php
$firstNumber = 8;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 Exo4 </title>
</head>
<body>
<p>
La boucle *while*
Créer une variable et l'initialiser à 1.  
**Tant que** cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur


</p>

<?php

while ($firstNumber<=10){
    echo '$firstNumber <br>';
    $firstNumber += $firstNumber/2;
}   


?>
</body>
</html>