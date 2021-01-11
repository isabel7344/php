 <!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <title>partie 7 exo 5</title>
 </head>

 <body>
     <div class="containerd-flex justify-content-center">

         <h1> Formulaire d'inscription</h1>
         <?php
            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender']) && !isset($_FILES['file'])) {
                ?>

         <form action="user.php" method="POST" enctype="multipart/form-data">
             <!-- L’attribut enctype spécifie comment les données de formulaire 
            doivent être encodées lors de leur soumission au serveur avec POST -->
             <div class=" mb-5">
                 <SELECT name="gender" size="1">
                     <option value="Monsieur" selected="selected">Mr</option>
                     <option value="Madame" selected="selected">Mme</option>
                 </SELECT>
             </div>
             <div class=" mb-5">
                 <label for="lastname">Quel est votre Nom ?</label>
                 <input type="text" class="lastname" name="lastname">
             </div>
             <div class="mb-5">
                 <label for="firstname">Quel est votre prénom ?</label>
                 <input type="text" class="firstname" name="firstname"">
            </div>
            <div>
            <!-- ajouter un champ d'envoi de fichier    -->
            <input type=" file" name="file">
             </div>

             <button type=" submit" class="btn btn-primary">Valider</button>
         </form>
         }else {
         ?>

     </div>


     <div class="Consigne text-center ">
         <p>
             Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier.
             Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

         </p>
         <p>Civilité : <?= $_POST['gender']; ?>
         </p>
         <p>Prénom : <?= $_POST['firstname']; ?>
         </p>
         <p>Nom : <?= $_POST['lastname']; ?>
         </p>
         <!-- Afficher le contenu d'un fichier avec la variable supergloale et <pre>permet l'affichage des retours à la ligne -->
         <pre><?php  print_r($_FILES); ?></pre>
         <?php
            }
            var_dump($_POST);
    ?>



 </body>

 </html>