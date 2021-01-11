<?php
$regexName = '/^[a-zA-Z]+$/';

if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
    if (preg_match($regexName, $_GET['firstname'])) {
        $securedFirstName = htmlspecialchars($_GET['firstname']);
    } else {
        $securedFirstName = '<i>Mauvais format</i>';
    }

    // preg_match permet de tester ue pattern regex
    if (preg_match($regexName, $_GET['lastname'])) {
        $securedLastName = htmlspecialchars($_GET['lastname']);
    } else {
        $securedlastName = '<i>Mauvais format';
    }
    // le var_dump ecrit du htlm donc mettre en haut
}
var_dump($_GET);?>
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Partie 7 - Exo3</title>
</head>

<body>

    <p>
        Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page
        **user.php** avec la méthode **GET**.
    </p>

    <!-- <?php var_dump($_GET);?> -->
    <p>Bonjour <?=  $securedFirstName . ' ' . $securedLastName; ?>
    </p>



</body>

</html>