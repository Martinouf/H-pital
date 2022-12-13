<?php 
    session_start();
?>
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

        <form method="post" action="chambre_post.php">
        <label><b>Formulaire d'ajout d'un nouveau patientdans une chambre selectionner.</b></label>
        <br>

            <h1>Formulaire - Ajout patient  </h1>

            

            <label><b>Num patient</b></label>
            <input type="number" placeholder="Entrer le nom du patient " name="Numpatient" required>

            <label><b>Numero de carte </b></label>
            <input type="number" placeholder="Entrer le nom de sa chambre " name="cartevitale" required>
            <br>

            <label><b>nom patient</b></label>
            <input type="text" placeholder="Entrer le nom de sa chambre " name="Nom" required>
            <br>

            <label><b>prenom patient</b></label>
            <input type="text" placeholder="Entrer le nom de sa chambre " name="Prenom" required>
            <br>

            <label><b>adresse</b></label>
            <input type="text" placeholder="Entrer le nom de sa chambre " name="Adresse" required>
            <br>

            <label><b>Date de naissance</b></label>
            <input type="date" placeholder="Entrer le nom de sa chambre " name="dateNaiss" required>
            <br>

    </div>

            <h1>Formulaire - Ajout chambre </h1>

            

            <label><b>Num chambre</b></label>
            <input type="number" placeholder="Entrer le nom du patient " name="NumChambre" required>

            <label><b>nom chambre</b></label>
            <input type="text" placeholder="Entrer le nom du patient " name="Nomchambre" required>

            

            <input type="submit" id='submit' value='Enregistrer' >

</body>