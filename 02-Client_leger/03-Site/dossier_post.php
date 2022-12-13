<?php

    //On établit la connexion
    $mysqli = mysqli_connect("localhost", "root", "azertysio", "Hopital");
    if (mysqli_connect_errno()) {
        echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
    }

        /* on test si les champ sont bien remplis */
        if(!empty($_POST['dossier']) and !empty($_POST['prenom']) and !empty($_POST['nom'])and !empty($_POST['jeune']) and !empty($_POST['date']) and !empty($_POST['telephone']) and !empty($_POST['adresse']))
        {
            $dossier = str_replace("'"," ", $_POST['dossier']);
            $prenom = str_replace("'", " ", $_POST['prenom']);
            $nom = str_replace("'", " ", $_POST['nom']);
            $jeune = str_replace("'", " ", $_POST['jeune']);
            $date = str_replace("'", " ", $_POST['date']);
            $telephone = str_replace("'", " ", $_POST['telephone']);
            $adresse = str_replace("'", " ", $_POST['adresse']);

            //On créé la requête
            $sql_medical = "INSERT INTO DOSSIERMEDICAL(NumDossier,Prenom,Nom,Nomjeune,Datenaissance,telephone,adresse) VALUES ('$dossier','$prenom','$nom','$jeune','$date','$telephone','$adresse')";     


            $prepareUtilisateur = $mysqli->prepare($sql_medical);

            $prepareUtilisateur->execute();

            header('Location: dossier-medical.php?Va=true'); 
            echo "le dossier a bien etait enregister"; 
            exit;

        }