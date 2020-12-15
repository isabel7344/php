<?php
if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
    if (preg_match('/^[a-zA-Z]+$/', $_GET['firstname'])) {
        $securedFirstName = htmlspecialchars($_GET['firstname']);
    }
    if (preg_match('/^[a-zA-Z]+$/', $_GET['lastname'])) {
        $securedLastName = htmlspecialchars($_GET['lastname']);
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
    <title>Partie 7 exo1</title>
</head>

<body>

    <p>
        Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page
        **user.php** avec la méthode **GET**.
    </p>

    <?= var_dump($_GET);?>
    <p>Bonjour <?=  $securedFirstName . ' ' . $securedLastName; ?>
    </p>



</body>

</html>