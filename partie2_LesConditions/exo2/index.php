<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 Exo2 </title>
</head>
<body>
<p>
Créer une variable **isEasy** de type booléan et l'initialiser avec une valeur.  
Afficher **C'est facile!!** si c'est vrai. Dans le cas contraire afficher **C'est difficile !!!**.  
**Bonus :** L'écrire de deux manières différentes.

</p>

<?php
$isEasy = true;
echo $isEasy;

if ($isEasy == true){
echo 'C\'est facile !!';
}
else {
    echo 'C\'est difficile';   
}
 echo $isEasy == true ?  'C\'est facile !!' : 'C\'est difficile';
?>

</body>
</html>