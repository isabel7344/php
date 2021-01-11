<?php
session_start();

$_SESSION['lastname'] = 'Fofana ';
$_SESSION['firstname'] = ' isabel ';
$_SESSION['age'] = ' 20';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>partie 8 exo 2</title>
</head>

<body>
    <div class="containerd-flex justify-content-center">

        <h1> Variables superglobales, sessions et cookies</h1>


        <div class="Consigne text-center ">
            <p>
                Sur la page index, faire un liens vers une autre page.
                Passer d'une page à l'autre le contenu des variables **lastname**,
                **firstname** et **age** grâce aux sessions.
                Ces variables auront été définies directement dans le code.
                Il faudra afficher le contenu de ces variables sur la deuxième page.
            </p>
            <div>
                <a href= user.php>Aller sur la page suivante</a>
            </div>



</body>

</html>