<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>partie 8 exo 4</title>
</head>

<body>
    <div class="containerd-flex justify-content-center">

        <h1> Variables superglobales, sessions et cookies</h1>


        <div class="Consigne text-center ">
            <p>
                Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.
            </p>
            <div>
                <form action="user.php" method="post">
                    <div class="mb-5">
                        <label for="login">Entre le login</label>
                        <input type="text" class="login" name="login">
                    </div>
                    <div class="mb-5">
                        <label for="passeword">Entre le mot de passe</label>
                        <input type="text" class="passeword" name="passeword">
                    </div>
                    <div>
                        <button type=" submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
        </div>



</body>

</html>