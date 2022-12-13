<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hopital - Gestion dossier médicale </title>
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <!-- Formulaire ajout dossier dans la bdd -->
    <div class="container">

        <form method="post" action="dossier_post.php">
        <label><b>Formulaire d'ajout d'un nouveau dossier médicale dans la base de données.</b></label>
        <br>
        <b> *  Les champs sont obligatoires. </b>

            <h1>Formulaire - Ajout dossier médicale</h1>

            

            <label><b>Numero dossier*</b></label>
            <input type="number" placeholder="Entrer son numero de dossier " name="dossier" required>

            <label><b>Prénom de la personne*</b></label>
            <input type="text" placeholder="Entrer le prénom de la personne  " name="prenom" required>
            <br>

            <label><b>Nom de la personne *</b></label>
            <input type="text" placeholder="Entrer le nom de la personne  " name="nom" required>
            <br>

            

            <label><b>Nom de jeune fille/Garçon *</b></label>
            <input type="text" placeholder="Entrer son nom de jeune fille/garcon " name="jeune" required>

            <label><b>Date de naissance du patient*</b></label>
            <input type="date" placeholder="Entrer sa date de naissance " name="date" required>
            <br>

            <label><b>Telephone *</b></label>
            <input type="text" placeholder="Entrer son numero de telephone  " name="telephone" required>

            <label><b>Adresse*</b></label>
            <input type="text" placeholder="Entrer son adresse " name="adresse" required>

            
            
            



            
            
            <input type="submit" id='submit' value='Enregistrer' >

        </form>
    </div>

    <br><br><br>

    <!-- Différents affichages des infos messages selon les entrées de l'utilisateur -->
    

            ?>

        </div>

    </div>

    <br><br>
    </div>

</body>
</html> 