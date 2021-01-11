<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 6 exo 3</title>
</head>

<body>
    <h1> Les paramètres d'URL</h1>
    <p>
        
    Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent 
     et les afficher: **index.php?startDate=2/05/2016&endDate=27/11/2016**

    </p>

  
    <?php
// Détermine si  tous les paramètres d\'une url existent
  $url = 'https://exos-php/partie6/exo1/';
  if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
      echo('URL est valide .<br>. index.php?startDate=2/05/2016&endDate=27/11/2016 ');
  } else {
      echo("URL n'est pas valide");
  }
?>


</body>

</html>