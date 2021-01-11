<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 Exo3 </title>
</head>
<body>
<p>
Les fonctions
Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines

</p>

<?php
    function exo3($salutations, $question)
    {
          return $salutations . $question;  
    }
    echo exo3("salut"," Comment tu vas?" );   
?>
</body>
</html>