<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 6 exo 1</title>
</head>

<body>
    <h1> Les paramètres d'URL</h1>
    <p>
        Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL
        existent et les afficher: **index.php?lastname=Nemare&firstname=Jean**
    </p>

    <?php
  $url = 'https://exos-php/partie6/exo1/';
  if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
      echo('URL est valide');
  } else {
      echo("URL n'est pas valide");
  }
?>

    // $url = 'http://exos-php/partie6/exo1/';
    // echo $url('index.php?lastname=Nemare&firstname=Jean');

    ?>

</body>

</html>