<!-- <?php
$login = '';
$passeword = '';
//  setcookie['login','lol'];
print_r($_COOKIE);
?> -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>partie 8 exo 3</title>
</head>

<body>
    <div class="containerd-flex justify-content-center">

        <h1> Variables superglobales, sessions et cookies</h1>


        <div class="Consigne text-center ">
            <p>
                Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
                A la validation du formulaire, stocker les informations dans un cookie.
            </p>
            <div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-5">
                        <label for="login">Entre le login</label>
                        <input type="text" class="login" name="login">
                    </div>
                    <div class="mb-5">
                        <label for="passeword">Entre le mot de passe</label>
                        <input type="passeword" class="passeword" name="passeword">
                    </div>
                    <div>
                        <button type=" submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
        </div>

        <?php
    // Le mot de passe n'a pas été envoyé ou n'est pas bon
    if ((!isset($_POST['login']) or $_POST['login'] != 'isabel') && (!isset($_POST['passeword']) or $_POST['passewword'] != 'panda')) {
    }
    // echo 'Le mot de passe a été envoyé et il est bon';
    else {
        // echo 'Afficher les codes secrets;
    }
    var_dump($passeword);
?>


</body>

</html>