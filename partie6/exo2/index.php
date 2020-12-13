<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 6 exo 2</title>
</head>

<body>
    <h1> Les paramètres d'URL</h1>
    <p>
        Faire une page index.php. Tester sur cette page que le paramètre **age** existe
        et si c'est le cas l'afficher sinon le signaler : **index.php?lastname=Nemare&firstname=Jean**

    </p>

    <?php
//  isset : Détermine si une variable est considérée définie, ceci signifie qu'elle est déclarée et est différente de null.
  if (isset($age)) {
      echo($age);
  } else {
      echo('index.php?lastname=Nemare&firstname=Jean');
  }
?>

</body>

</html>