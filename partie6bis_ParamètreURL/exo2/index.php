<?php
// $_GET affiche le tableau et $_POST l'affiche que dans le serveur

$age = 'Param n\'est pas pésent';
if (isset($_GET['age'])) {
    $age = $_GET['age'];
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>partie 6bis exo 1</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center m-5">
            <a class="btn btn-primary" href="   index.php?lastname=Shima&firstname=Brian">Envoie des paramètre</a>
            <a class="btn btn-secondary" href="index.php">Retour Index</a>
        </div>

        <p class="text-center"> Param3 : <?= $age ?>
        </p>
    </div>


    <div class="Consigne text-center ">

        <h1> Les paramètres d'URL</h1>
        <p>
            Voici l'URL à étudier :

            index.php?lastname=Shima&firstname=Brian

            Faire une page index.php.
            Sur cette page faire 2 boutons :

            Le premier "bouton" doit contenir un href qui pointe vers l'URL. Il faut ensuite tester sur cette même page
            que
            le paramètre age existe :
            S'il est présent, l'afficher.
            Dans le cas contraire, mettre un message : "il manque le paramètre age".
            Le deuxieme "bouton" doit permettre de revenir à la page index.php.
            Affichage le paramètre est pas présent.
        </p>


</body>

</html>