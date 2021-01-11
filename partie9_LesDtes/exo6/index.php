<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Partie 9 exo5</title>
</head>

<body>
<h1> Les Dates</h1>
    <p>
    Afficher le nombre de jour dans le mois de février de l'année 2016.
    </p>
     <?php

    $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 29
    echo "il y a  {$number} de jours en février 2016";

    ?>
</body>

</html>