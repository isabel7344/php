<?php
$age = 18;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>partie2 exo6</title>
</head>
<body>

<p>
Traduire ce code avec des if et des else :  
    < ?php
      echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?>
</p>

<?php
if ($age >=18) {
    echo "Tu es majeur";
} else {
    echo "Tu n'es pas majeur";
}
?>


</body>
</html>