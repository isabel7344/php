<?php
$number1 = 20;
$number2 =40 ;
$number3 =60 ;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 Exo8 </title>
</head>
<body>
<p>
Les fonctions
Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut.
</p>

<?php
    function numbers ($nb1,$nb2,$nb3)
{ 
        return $nb1 + $nb2 + $nb3;   
}
    echo numbers($number1, $number2, $number3);
    var_dump(numbers($number1,$number2,$number3));  
?>

</body>
</html>