
<?php
$mysqli = mysqli_connect("localhost", "root", "azertysio", "Hopital");
    if (mysqli_connect_errno()) {
        echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
    }

    

    /* on test si les champ sont bien remplis */
    if(!empty($_POST['Numpatient']) AND !empty($_POST['cartevitale'])AND !empty($_POST['Nom'])AND !empty($_POST['Prenom'])AND !empty($_POST['Adresse'])AND !empty($_POST['dateNaiss'])AND !empty($_POST['NumChambre'])AND !empty($_POST['Nomchambre']) )
    {
        
        $patient = str_replace("'"," ", $_POST['Numpatient']);
        $carte = str_replace("'", " ", $_POST['cartevitale']);
        $nom = str_replace("'", " ", $_POST['Nom']);
        $prenom = str_replace("'", " ", $_POST['Prenom']);
        $adresse = str_replace("'", " ", $_POST['Adresse']);
        $date = str_replace("'", " ", $_POST['dateNaiss']);
        $Numchambre = str_replace("'", " ", $_POST['NumChambre']);
        $Nomchambre = str_replace("'", " ", $_POST['Nomchambre']);
        
        

        $sql_patient = "INSERT INTO PATIENT(NumPatient,NumCarteVitale, Nom, Prenom, Adresse, DateNaiss) VALUES ('$patient','$carte','$nom','$prenom','$adresse','$date')";
        $sql_chambre = "INSERT INTO CHAMBRE(NumChambre,NbLits) VALUES('$Numchambre','$Nomchambre')";
                


        $prepareUtilisateur = $mysqli->prepare($sql_patient);
        $prepareUtilisateur1 = $mysqli->prepare($sql_chambre);

        


        
        
        $prepareUtilisateur->execute();
        $prepareUtilisateur1->execute();

        
        
        header('Location: Chambre.php?Va=true'); 
        echo "le patient ainsi que la chambre on bien été crée "; 
        exit;

    }