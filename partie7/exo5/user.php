<?php
if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
    if (preg_match('/^[a-zA-Z]+$/', $_POST['firstname'])) {
        $securedFirstName = htmlspecialchars($_POST['firstname']);
    }
    if (preg_match('/^[a-zA-Z]+$/', $_POST['lastname'])) {
        $securedLastName = htmlspecialchars($_POST['lastname']);
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
    <title>Partie 7 exo5</title>
</head>

<body>

    <p>
        Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page
        **user.php** avec la méthode **POST**.
    </p>

    <?= var_dump($_POST);?>
    <p>Bonjour <?=  $securedFirstName . ' ' . $securedLastName; ?>
    </p>



</body>

</html>