<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 Exo7 </title>
</head>
<body>
<p>
Les fonctions
Faire une fonction qui prend deux paramètres : **l'âge et le genre d'une personne**. Le genre peut être :
- Homme
- Femme  

La fonction doit renvoyer en fonction des paramètres :
- **Vous êtes un homme et vous êtes majeur**
- **Vous êtes un homme et vous êtes mineur**
- **Vous êtes une femme et vous êtes majeur**
- **Vous êtes une femme et vous êtes mineur**

Gérer tous les cas.

</p>

<?php

$gender = "homme" || "femme";

    function exo7 ($age,$gender)
{
    if ($gender == "Homme" && $age >= 18) {
        return "Vous êtes un homme et vous êtes majeur";
    } else if ($gender == "Homme" && $age < 18) {
        return "Vous êtes un homme et vous êtes mineur";
    } else if ($gender == "Femme" && $age >= 18) {
        return "Vous êtes une femme et vous êtes majeur";
    } else {
        return "Vous êtes une femme et vous êtes mineur";
    }
}

    echo exo7 ("femme", 30 ) ;
    var_dump(exo7 ('homme',15));

   
?>

</body>
</html>