<?php
$age = 15;
$gender = "Femme";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 Exo3 </title>
</head>
<body>
<p>
Créer deux variables **age** et **gender**. La variable **gender** peut prendre comme valeur :
- Homme
- Femme  

En fonction de l'âge et du genre afficher la phrase correspondante :
- **Vous êtes un homme et vous êtes majeur**
- **Vous êtes un homme et vous êtes mineur**
- **Vous êtes une femme et vous êtes majeur**
- **Vous êtes une femme et vous êtes mineur**  

Gérer tous les cas.
</p>

<?php

if ($gender == "Homme" && $age >= 18) {
    echo "Vous êtes un homme et vous êtes majeur";
} else if ($gender == "Homme" && $age < 18) {
    echo "Vous êtes un homme et vous êtes mineur";
} else if ($gender == "Femme" && $age >= 18) {
    echo "Vous êtes une femme et vous êtes majeur";
} else {
    echo "Vous êtes une femme et vous êtes mineur";
}

?>

</body>
</html>