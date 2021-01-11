<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>partie7 exo2</title>
</head>

<body>
    <div class="containerd-flex justify-content-center">

        <h1> Formulaire d'inscription</h1>

        <form action="user.php" method="POST">
            <div class=" mb-5">
                <label for="lastname">Quel est votre Nom ?</label>
                <input type="text" class="lastname" name="lastname">
            </div>
            <div class="mb-5">
                <label for="firstname">Quel est votre prénom ?</label>
                <input type="text" class="firstname" name="firstname">
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>


    </div>


    <div class="Consigne text-center ">
        <p>
            Créer un formulaire demandant **le nom** et **le prénom**.
            Ce formulaire doit rediriger vers la page **user.php** avec la méthode **POST**.
        </p>



</body>

</html>