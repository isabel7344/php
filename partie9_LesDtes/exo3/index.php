<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARTIE 9 EXO3</title>
</head>

<body>
    <h1> Les Dates</h1>
    <p>
    Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
    Bonus : Le faire en français.
    </p>
     <?php
        setlocale(LC_TIME, 'fra_fra.UTF8');
        echo strftime('%A %d %B %Y ') . '<br>';
    ?>
</body>

</html>