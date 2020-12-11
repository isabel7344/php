<?php
$isOk = true;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>partie2 exo7 </title>
</head>
<body>

<p>
Traduire ce code avec des if et des else :  
    < ?php
      echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    ?>
</p>

<?php
if ($isOk == false) {
    echo "C'est pas bon !!!";
} else {
    echo "C'est ok !!";
}
?>


</body>
</html>