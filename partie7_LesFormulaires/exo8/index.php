<?php

if (empty($_POST)) {
    $showForm = true;
} else {
    $showForm = false;
}

$regexName = '/^[a-zA-Z]+$/';

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
    // Sécurisation des données, regex pour verifier prénom et nom
    // preg_match : permet de rechercher des motifs bien précis au sein d’une chaîne de caractères
    // htmlspecialchars : Convertit les caractères spéciaux en entités HTML
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
if (isset($_FILES['file'])) {
    // Tableau contenant nos extensions , pour validité du fichier ou non
    $extensions = ['.pdf', '.PDF'];
    // Récupérer l'extension du fichier à partir du name       , pathinfo marche également (correction Alexis)
    $extensionFile = strrchr($_FILES['file']['name'], '.');

    // Condition pour savoir si le fichier uploadé est OK
    // in_array : recherche dans un array. On recherche si $extensionFile est présent dans $extensions
    if (!in_array($extensionFile, $extensions)) {
        $securedFile = 'Le fichier transmis doit être un .pdf';
    } else {
        $securedFile = 'OK';
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
    <title>Partie 7 - Exo 5, 6, 7</title>
</head>

<body>

    <p>
        Créer un formulaire sur la page **index.php** avec :<br><br>
        - Une liste déroulante pour la civilité (Mr ou Mme)<br>
        - Un champ texte pour le nom<br>
        - Un champ texte pour le prénom <br><br>

        Ce formulaire doit rediriger vers la page **index.php**.<br>
        Vous avez le choix de la méthode.<br><br>

        Avec le formulaire de l'exercice 5, Si des données sont passées en **POST** ou en **GET**, <br>
        le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire,
        c'est l'inverse.<br>
        Utiliser qu'une seule page.<br><br>

        Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à
        l'exercice 6, le nom et l'extension du fichier.<br><br>

        Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le
        fichier transmis est bien un fichier **pdf**.
    </p>

    <?php
    if ($showForm) {
        ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div>
            <select name="gender">
                <option value="Monsieur">Mr</option>
                <option value="Madame">Mme</option>
            </select>
        </div>
        <div>
            <label for="firstname">Votre prénom : </label>
            <input type="text" id="firstname" name="firstname">
        </div>
        <div>
            <label for="lastname">Votre nom : </label>
            <input type="text" id="lastname" name="lastname">
        </div>
        <div>
            <!-- Il faut ajouter l'attribut enctype au form si on veut ajouter des fichiers au formulaire -->
            <input type="file" name="file" />
        </div>
        <input type="submit" value="Valider">
    </form>
    <?php
    } else {
        ?>
    <p>Civilité : <?= $_POST['gender']; ?>
    </p>
    <p>Prénom : <?= $securedFirstname; ?>
    </p>
    <p>Nom : <?= $securedLastname; ?>
    </p>
    <!-- https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires -->
    <!-- lien ci-dessus : explication des traitements de l'envoi en PHP -->
    <!-- https://www.youtube.com/watch?v=kkkQoGEzP0w -->
    <!-- ci-dessous : on affiche le nom du fichier sélectionné 
               Pour chaque fichier envoyé, une variable  $_FILES['nom_du_champ'] est créée. cette variable est un tableau qui contient plusieurs infos, voir lien openclassrooms.-->
    <p>Nom du fichier : <?= $_FILES['file']['name']; ?>
    </p>
    <p>Extension du fichier : <?= $extensionFile ?>
    </p>
    <p>Validité du format du fichier : <?= $securedFile ?>
    </p>
    <?php
    }
    ?>




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


<!-- <!doctype html>
<html lang="fr">

<head>
    <title>Exo 8 - Index</title>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="m-5">

        <p>## Exercice 8
            Sur le formulaire de l'exercice 6, en plus de ce qui
            est demandé sur les exercices précédent, vérifier que
            le fichier transmis est bien un fichier **pdf**.</p>

        <?php

        if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender'])) {
            $fileinfo = pathinfo($_FILES['filepdf']['name']);
            $extension_pdf = $fileinfo['extension'];
            if ($extension_pdf == 'pdf') {
                $displayExtension = 'Le fichier est bien un pdf';
            } else {
                $displayExtension = 'Le fichier n\'est pas un pdf';
            }
            echo 'Nom : ' . $_POST['lastname'] . ' <br> Prénom : ' . $_POST['firstname'] . ' <br> Genre : ' . $_POST['gender'] . ' <br> Fichier : '
                . $_FILES['filepdf']['name'] . '<br> Extension : ' . $displayExtension;
        } else {
            ?>

        <div>
            <form enctype="multipart/form-data" action="index.php" method="post">
                <div>
                    <label for="lastname">Nom :</label>
                    <input type="text" id="lastname" name="lastname">
                </div>
                <div>
                    <label for="firstname">Prénom :</label>
                    <input type="text" id="firstname" name="firstname">
                </div>
                <div>
                    <select name="gender" id="gender">
                        <option value="Homme">Mr.</option>
                        <option value="Femme">Mme.</option>
                    </select>
                </div>
                <div>
                    <label for="filepdf">Choisir un fichier :</label>

                    <input type="file" id="filepdf" name="filepdf" accept="application/pdf">
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </div>

        <?php
        }

        ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html> -->