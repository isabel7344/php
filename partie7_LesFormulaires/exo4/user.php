<?php

$regexName = '/^[a-zA-Z]+$/';

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
    // Sécurisation des données, regex pour verifier prénom et nom
    if (preg_match($regexName, $_POST['firstname'])) {
        $securedFirstname = htmlspecialchars($_POST['firstname']);
    } else {
        $securedFirstname = '<i>Mauvais format</i>';
    }

    if (preg_match($regexName, $_POST['lastname'])) {
        $securedLastname = htmlspecialchars($_POST['lastname']);
    } else {
        $securedLastname = '<i>Mauvais format</i>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Partie 7 - Exo 2 & 4</title>
</head>

<body>

    <p>
        Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page
        **user.php** avec la méthode **POST**.
    </p>

    <?php var_dump($_POST);?>
    <p>Bonjour <?= $securedFirstname . ' ' . $securedLastname; ?>
    </p>



</body>

</html>