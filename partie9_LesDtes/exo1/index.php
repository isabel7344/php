<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARTIE 9 EXO1</title>
</head>

<body>
    <h1> Les Dates</h1>
    <p>
        Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).
    </p>
 <?php
    date_default_timezone_set('Europe/Paris');
    echo date('d/m/Y') . '<br>';
 ?>
</body>

</html>