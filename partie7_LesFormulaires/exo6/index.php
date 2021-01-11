<!-- <p>Bonjour je m'appelle, <?= $gender . ' ' . $securedFirstName . ' ' . $securedLastName;
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>partie 7 exo 6</title>
</head>
</head>

<body>
    <div class="containerd-flex justify-content-center">

        <h1> Formulaire d'inscription</h1>

        <?php
            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender'])) {
                ?>
        <form action="user.php" method="POST">
            <div class=" mb-5">
                <SELECT name='gender' size="1">
                    <option selected="selected">Mr</option>
                    <option selected="selected">Mme</option>
                </SELECT>
            </div>
            <div class=" mb-5">
                <label for="lastname">Quel est votre Nom ?</label>
                <input type="text" class="lastname" name="lastname">
            </div>
            <div class="mb-5">
                <label for="firstname">Quel est votre prénom ?</label>
                <input type="text" class="firstname" name="firstname"">
        </div>

        <button type=" submit" class="btn btn-primary">Valider</button>
        </form>
        }else {
        ?>

    </div>


    <div class="Consigne text-center ">
        <p>
            Avec le formulaire de l'exercice 5, Si des données sont passées en **POST** ou en **GET**,
            le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être.
            Dans le cas contraire, c'est l'inverse.
            Utiliser qu'une seule page.
        </p>

        <p>Civilité : <?= $_POST['gender']; ?>
        </p>
        <p>Prénom : <?= $_POST['firstname']; ?>
        </p>
        <p>Nom : <?= $_POST['lastname']; ?>
        </p>
        <?php
            }
            var_dump($_POST);
    ?>

</body>

</html>