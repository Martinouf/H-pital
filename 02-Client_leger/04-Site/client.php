<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hopital - Gestion patient</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <!-- Formulaire ajout dossier dans la bdd -->
    <div class="container">

        <form method="post" action="client_post.php">
        <label><b>Formulaire d'ajout d'un nouveau patient dans la base de données.</b></label>
        <br>
        <b> *  Les champs sont obligatoires. </b>

            <h1>Formulaire - Ajout patient</h1>
            <label><b>Nom patient *</b></label>
            <input type="text" placeholder="Entrer le nom du patient " name="nom" required>

            <label><b>Prénom patient *</b></label>
            <input type="text" placeholder="Entrer le prénom du patient " name="prenom" required>
            <label><b>Adresse patient *</b></label>
            <input type="text" placeholder="Entrer l'adresse du patient " name="adresse" required>
            <td>Votre sexe</td>
            <td>
            <select size="1" name="Ltsexe">
                <option>Votre sexe … </option>
                <option value="m">M </option>
                <option value="f">F </option>
                <option value="nb">NB</option>
            </select>
</td>
            
            <input type="submit" id='submit' value='Enregistrer' >

        </form>
    </div>

</body>
</html> 