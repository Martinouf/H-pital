public class Chambre {
    //Attributs
    private int NumChambre;
    private int NbChambre;

    //Getteurs
    public int getNumChambre()
    {
	    return NumChambre;
    }

    public int getNbChambre()
    {
	    return NbChambre;
    }

    //Setteurs
    public void setNumChambre(int Nc)
    {
	    this.NumChambre=Nc;
    }

    public void setNomSalle(int Nbc)
    {
	    this.NbChambre=Nbc;
    }

    //Constructeur
    public Chambre(int Nc, int Nbc){
        this.NumChambre=Nc;
        this.NbChambre=Nbc;
    }

    //ToString
    @Override
    public String toString()
    {
        return "Chambre: Numero Chambre = "+ this.NumChambre + " Nombre Total de Chambre = " + this.NbChambre;
    }
}