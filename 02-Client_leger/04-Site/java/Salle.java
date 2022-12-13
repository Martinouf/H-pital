public class Salle{
    //Variables
    private int NumSalle;
    private String NomSalle;

    //Getteurs
    public int getNumSalle()
    {
	    return NumSalle;
    }

    public String getNomSalle()
    {
	    return NomSalle;
    }

    //Setteurs
    public void setNumSalle(int NuS)
    {
	    this.NumSalle=NuS;
    }

    public void setNomSalle(String NoS)
    {
	    this.NomSalle=NoS;
    }

    //Constructeur
    public Salle(int NuS, String NoS){
        this.NumSalle=NuS;
        this.NomSalle=NoS;
    }

    //ToString
    @Override
    public String toString()
    {
        return "Salle: Numero Salle = "+ this.NumSalle + " Nom = " + this.NomSalle;
    }
}