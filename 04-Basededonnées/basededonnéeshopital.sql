CREATE TABLE PERSONNEL(
   NumPersonnel INT IDENTITY,
   NomPersonnel VARCHAR(50),
   PrenomPersonnel VARCHAR(50),
   PRIMARY KEY(NumPersonnel)
);

CREATE TABLE RDV(
   NumRdv INT IDENTITY,
   DateRdv DATE NOT NULL,
   HeureRdv TIME,
   InfoRdv VARCHAR(500),
   PRIMARY KEY(NumRdv)
);

CREATE TABLE SERVICE(
   NumService INT IDENTITY,
   NomService VARCHAR(20) NOT NULL,
   DateService DATETIME2,
   PRIMARY KEY(NumService)
);

CREATE TABLE CHAMBRE(
   NumChambre INT IDENTITY,
   NbLits SMALLINT,
   PRIMARY KEY(NumChambre)
);

CREATE TABLE SALLE(
   NumSalles INT IDENTITY,
   NomSalles VARCHAR(50) NOT NULL,
   PRIMARY KEY(NumSalles)
);

CREATE TABLE PROFESSION(
   CodeProfession INT IDENTITY,
   TypeProfession VARCHAR(50),
   NumPersonnel INT NOT NULL,
   PRIMARY KEY(CodeProfession),
   FOREIGN KEY(NumPersonnel) REFERENCES PERSONNEL(NumPersonnel)
);

CREATE TABLE PATIENT(
   NumPatient INT IDENTITY,
   NumCarteVitale INT,
   Nom VARCHAR(50) NOT NULL,
   Prenom VARCHAR(50),
   Adresse VARCHAR(100),
   DateNaiss DATE,
   NumChambre INT,
   PRIMARY KEY(NumPatient),
   FOREIGN KEY(NumChambre) REFERENCES CHAMBRE(NumChambre)
);

CREATE TABLE DOSSIERMEDICAL(
   NumPatient INT,
   NumDossier SMALLINT NOT NULL,
   Informations VARCHAR(500),
   PRIMARY KEY(NumPatient),
   FOREIGN KEY(NumPatient) REFERENCES PATIENT(NumPatient)
);

CREATE TABLE Occuper(
   NumPersonnel INT,
   NumPatient INT,
   PRIMARY KEY(NumPersonnel, NumPatient),
   FOREIGN KEY(NumPersonnel) REFERENCES PERSONNEL(NumPersonnel),
   FOREIGN KEY(NumPatient) REFERENCES PATIENT(NumPatient)
);

CREATE TABLE Se_Faire_Soigner(
   NumPatient INT,
   NumSalles INT,
   PRIMARY KEY(NumPatient, NumSalles),
   FOREIGN KEY(NumPatient) REFERENCES PATIENT(NumPatient),
   FOREIGN KEY(NumSalles) REFERENCES SALLE(NumSalles)
);

CREATE TABLE Travailler(
   NumPersonnel INT,
   NumService INT,
   PRIMARY KEY(NumPersonnel, NumService),
   FOREIGN KEY(NumPersonnel) REFERENCES PERSONNEL(NumPersonnel),
   FOREIGN KEY(NumService) REFERENCES SERVICE(NumService)
);

CREATE TABLE Obtenir(
   NumPatient INT,
   NumRdv INT,
   PRIMARY KEY(NumPatient, NumRdv),
   FOREIGN KEY(NumPatient) REFERENCES PATIENT(NumPatient),
   FOREIGN KEY(NumRdv) REFERENCES RDV(NumRdv)
);

CREATE TABLE Attribuer(
   NumRdv INT,
   NumService INT,
   PRIMARY KEY(NumRdv, NumService),
   FOREIGN KEY(NumRdv) REFERENCES RDV(NumRdv),
   FOREIGN KEY(NumService) REFERENCES SERVICE(NumService)
);
