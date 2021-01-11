<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARTIE 9 EXO4</title>
</head>

<body>
    <h1> Les Dates</h1>
    <p>
    Afficher le timestamp du jour.  
    Afficher le timestamp du mardi 2 août 2016 à 15h00.
    </p>
     <?php

        echo "Il s'est écoulé " . time() . ' secondes depuis le 1er Janvier 1970' . '<br>';
        echo "mardi 2 août 2016, c'était il y a " . mktime(15, 0, 0, 8, 02, 2016) . ' secondes ';

    ?>
</body>

</html>