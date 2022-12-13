public class Patient{
    private int NumPatient;
    private String Nom;
    private String Prenom;
    private String Adresse;
    private String DateNaiss;
    private String NumCarteVitale;

public int  getNumPatient()
    {
	    return NumPatient;
    }

public String getNom()
    {
	    return Nom;
    }
public String getPrenom()
    {
	    return Prenom;
    }
public String getAdresse()
    {
	    return Adresse;
    }
public String getDateNaiss()
    {
	    return DateNaiss;
    }
public String getNumCarteVitale()
    {
	    return NumCarteVitale;
    }
    public void setNumPatient(int NumPatient){
	    this.NumPatient=NumPatient;
    }
    public void setNom(String Nom){
	    this.Nom=Nom;
    }
    public void setPrenom(String Prenom){
	    this.Prenom=Prenom;
    }
    public void setAdresse(String Adresse){
	    this.Adresse=Adresse;
    }
    public void setDateNaiss(String DateNaiss){
	    this.DateNaiss=DateNaiss;
    }
    public void setNumCarteVitale(String NumCarteVitale){
	    this.NumCarteVitale=NumCarteVitale;
    }

    /**
     * 
     * @param NumPatient
     * @param Nom
     * @param Prenom
     * @param Adresse
     * @param DateNaiss
     * @param NumCarteVitale
     */
    public Patient(int NumPatient,String Nom,String Prenom,String Adresse,String DateNaiss, String NumCarteVitale){
        this.NumPatient=NumPatient;
        this.Nom=Nom;
        this.Prenom=Prenom;
        this.Adresse=Adresse;
        this.DateNaiss=DateNaiss;
        this.NumCarteVitale=NumCarteVitale;
    }
    @Override
    public String toString()
    {
        return "Patient: NumPatient = "+ this.NumPatient + " Nom = " + this.Nom + " Prenom = " + this.Prenom + " Adresse = " + this.Adresse + " DateNaiss = " + this.DateNaiss + " NumCarteVitale = " + this.NumCarteVitale;
    }

}