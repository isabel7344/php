<!DOCTYPE html>
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
                <SELECT class="civilité" size="1">
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


    </div>


    <div class="Consigne text-center ">
        <p>
            Créer un formulaire sur la page **index.php** avec :
            - Une liste déroulante pour la civilité (Mr ou Mme)
            - Un champ texte pour le nom
            - Un champ texte pour le prénom
        </p>



</body>

</html>