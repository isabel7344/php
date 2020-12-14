<?php
// $_GET affiche le tableau et $_POST l'affiche que dans le serveur

if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    echo $_GET['lastname'] . ' ' . $_GET['firstname'];

    // var_dump($_GET['lastname']) ;
    // var_dump($_GET['firstname']) ;
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

   

<form>
    <a class="btn btn-primary" href="index.php?lastname=Tutor&amp;firstname=Janine">Envoie des paramètre</a>
    <a class="btn btn-secondary" href="index.php?">Retour Index</a>
</form> 
<h1> Les paramètres d'URL</h1>
<p>
        Voici l'URL à étudier :
        index.php?lastname=Tutor&firstname=Janine

        Faire une page index.php.
        Sur cette page faire 2 boutons :

        Le premier "bouton" doit contenir un href qui pointe vers l'URL.
        Il faut ensuite tester sur cette même page que tous les paramètres existent :
        S'ils sont présents les afficher.
        Dans le cas contraire ne rien afficher.
        Le deuxieme "bouton" doit permettre de revenir à la page index.php.
    </p>

</body>

</html>