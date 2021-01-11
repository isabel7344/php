<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />

    <title>partie 10 TP1</title>
</head>

<body>
    <div class="container justify-content-center bg-primary rounded person-shadow mt-2">

        <h1 class="text-center"> Formulaire d'inscription</h1>
        <h2 class="text-center text-uppercase"> Veuillez remplir le formulaire !</h2>
    </div>
    <div class="container d-flex justify-content-center bg-info rounded person-shadow mt-4 mb-2 ">
        <form action="user.php" method="get">
            <div class=" mb-5 mt-5">
                <label class="col-4" for="lastname">NOM</label>
                <input type="text" class="lastname col-4" name="lastname">
            </div>
            <div class="mb-5">
                <label class="col-4" for="firstname">PRENOM</label>
                <input type="text" class="firstname col-4" name="firstname">
            </div>
            <div class="mb-5">
                <label class="col-4" for="birthday">DATE DE NAISSANCE</label>
                <input type="text" class="birthday col-4 " name="birthday">
            </div>
            <div class="mb-5">
                <label class="col-4" for="nativeCountry">PAYS DE NAISSANCE</label>
                <input type="text" class="nativeCountry col-4" name="nativeCountry">
            </div>
            <div class="mb-5">
                <label class="col-4" for="nationality">NATIONALITE</label>
                <input type="text" class="nationality col-4" name="nationality">
            </div>
            <div class="mb-5">
                <label class="col-4" for="adress">ADRESSE</label>
                <input type="text" class="adress col-4" name="adress">
            </div>
            <div class="mb-5">
                <label class="col-4" for="mail">E-MAIL</label>
                <input type="text" class="mail col-4" name="mail">
            </div>
            <div class="mb-5">
                <label class="col-4" for="tel">TEL</label>
                <input type="text" class="tel col-4 " name="tel">
            </div>
            <div class="mb-5">
                <label class="col-4" for="diploma">DIPLOMES</label>
                <select name="diploma">
                    <option value="1"> Sans </option>
                    <option value="1"> Bac </option>
                    <option value="1"> Bac+2 </option>
                    <option value="1"> Bac+3 </option>
                    <option value="1"> Supérieur </option>
                </select>
            </div>

            <div class="mb-5">
                <label class="col-4" for="numberPole">NUMERO POLE EMPLOI</label>
                <input type="text" class="numberPole col-4" name="numberPole">
            </div>

            <div class="mb-5">
                <label class="col-4" for="numberBadge">NUMERO DE BADGE</label>
                <input type="text" class="numberBadge col-4 " name="numberBadge">
            </div>
            <div class="mb-5">
                <label class="col-4" for="codeAcademy"> Liens codecademy</label>
                <input type="text" class="codeAcademy col-4" name="codeAcademy">
            </div>
            <div class="mb-5 ">
                <label for="question"> Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi
                    ?</label>
                <textarea class="col-12 p-4" name="answer1"></textarea>
            </div>
            <div class="mb-5 ">
                <label for="question"> Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
                </label>
                <textarea class="col-12 p-4" name="answer2"></textarea>
            </div>
            <div class="mb-5">
                <label for="question3"> Avez vous déjà eu une expérience avec la programmation et/ou l'informatique
                    avant de remplir ce formulaire ?
                </label>
                <input type="radio" name="rdb" value="1">OUI</input>
                <input type="radio" name="rdb" value="2">NON</input>
            </div>
            <div class="mb-5">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>

    <!-- <div class="Consigne text-center ">
        <p>
            Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :
            Nom
            Prénom
            Date de naissance
            Pays de naissance
            Nationalité
            Adresse
            E-mail
            Téléphone
            Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)
            Numéro pôle emploi
            Nombre de badge
            Liens codecademy
            Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?
            Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
            Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?

            A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.
        </p> 
    </div> -->


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