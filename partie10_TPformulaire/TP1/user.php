<?php
 $lastname = valid_donnees($_GET['lastname']);
 $firstname = valid_donnees($_GET['firstname']);
 $birthday = valid_donnees($_GET['birthday']);
 $mail = valid_donnees($_GET['mail']);
 $nativeCountry = valid_donnees($_GET['nativeCountry']);
 $nationality = valid_donnees($_GET['nationality']);
 $adress = valid_donnees($_GET['adress']);
 $adress = valid_donnees($_GET['adress']);
 $tel = valid_donnees($_GET['tel']);
 $numberPole = valid_donnees($_GET['numberPole']);
 $numberBadge = valid_donnees($_GET['numberBadge']);
 $rdb_value1 = $_GET['rdb'];
 $rdb_value2 = $_GET['rdb'];

 function valid_donnees($donnees)
 {
     // stocker les données,supprimer les espaces inutiles,supprimer les antislashes
     $donnees = trim($donnees);
     $donnees = stripslashes($donnees);
     $donnees = htmlspecialchars($donnees);
     return $donnees;
 }

 /*Si les champs  ne sont pas vides et si les donnees ont
  *bien la forme attendue...*/
 if (!empty($lastname && $firstname && $nativeCountry && $nationality)
     && strlen($lastname && $firstname && $nativeCountry && $nationality)
     && preg_match("/^\D(2,19)$/, $lastname && $firstname && $nativeCountry && $nationality)
     && !empty($birthday)
     && !preg_match('/^([0-3][0-9]})(/)([0-9]{2,2})(/)([0-3]{2,2})$/', $birthday)
     && !empty($tel)
     && !preg_match('/^[(\d\d\s){4}(\d\d)]$/', $tel)
     && !empty($adress)
     && !preg_match('/^([1-9][0-9]{0,2}(?:\s*[A-Z])?)\b/$/', $adress)
     && !empty($numberPole)
     && !preg_match('/^[(0-9){7}/(A-Z){1}]$/', $numberPole)
     && !empty($numberBadge)
     && !preg_match('/^[(0-9){1,3}]$/', $numberBadge)
     && !empty($mail)
     && !preg_match('/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/', $mail)
     && filter_var($mail, FILTER_VALIDATE_EMAIL)) {


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Partie 10 TP1</title>
</head>

<body>


    <p><?php var_dump($_GET); ?>
</p>
</body>

</html>