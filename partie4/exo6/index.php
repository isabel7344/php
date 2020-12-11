<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 Exo6 </title>
</head>
<body>
<p>
Les fonctions
Faire une fonction qui prend trois paramètres : **le nom, le prénom et l'âge d'une personne**. Elle doit renvoyer une chaine de la forme :  
"Bonjour" + **nom** + **prénom** + ",tu as" + **age** + "ans".

</p>

<?php


    function exo6 ($name,$forename,$age)
    {
    return " Bonjour " .  $name . $forename . " tu as " .  $age . " ans."; 
    // return "Bonjour $name $forename tu as $age ans.";
    }
    echo exo6 ("vaillant", "jacques", 50) ;
?>

</body>
</html>