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
    <form action="user.php" method="post">
        <label for="firstname">Votre prénom : </label>
        <input type="text" id="firstname" name="firstname">
        <label for="lastname">Votre nom : </label>
        <input type="text" id="lastname" name="lastname">
        <input type="submit" value="Valider">
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>





























<!-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>partie 7 exo 4</title>
</head>

<body>
    <div class="containerd-flex justify-content-center">

        <h1> Formulaire d'inscription</h1>


        <form action="user.php" method="POST">
            <div class=" mb-5">
                <label for="lastname">Quel est votre Nom ?</label>
                <input type="text" class="lastname" lastname="nom">
            </div>
            <div class="mb-5">
                <label for="firstname">Quel est votre prénom ?</label>
                <input type="text" class="firstname" firstname=" prénom">
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>


    </div>


    <div class="Consigne text-center ">
        <p>
            Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.
        </p>



</body>

</html> -->