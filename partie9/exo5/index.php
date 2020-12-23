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
    Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
    </p>
     <?php
        $anciennedate = '16-05-2016';
        $datedujour = date('d-m-Y');
        $jmoins = ((strtotime($datedujour)) - strtotime($anciennedate));
        $jmoins = round($jmoins / (60 * 60 * 24));
        echo "La différence entre les 2 dates est de $jmoins jours";
//affiche "La différence entre les 2 dates est de "
    ?>
</body>

</html>