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
    Afficher la date du jour - 22 jours.
    </p>
     <?php

    $date = strftime('%d-%m-%Y', mktime(0, 0, 0, date('m'), date('d') - 21, date('y')));
    echo $date;

    ?>
</body>

</html>