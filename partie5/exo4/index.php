<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 5 exo 4</title>
</head>
<body>
    <h1> LES TABLEAUX</h1>
    <p>
    <!-- Créer un tableau **months** et l'initialiser avec les valeurs suivantes :
- **janvier**
- **février**
- **mars**
- **avril**
- **mai**
- **juin**
- **juillet**
- **aout**
- **septembre**
- **octobre**
- **novembre**
- **décembre**  -->
Avec le tableau de l'exercice 1, modifier le mois de **aout** pour lui ajouter l'accent manquant.
    </p>

    <?php
    $month = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
    $month[7] = 'août';
    var_dump($month);
?>
    
</body>
</html>