public class Personnel {
    //Attributs
    private int NumPersonnel;
    private String NomPersonnel;
    private String PrenomPersonnel;

    //Getteurs
    public int getNumPersonnel()
    {
	    return NumPersonnel;
    }

    public String getNomPersonnel()
    {
	    return NomPersonnel;
    }
    public String getPrenomPersonnel()
    {
	    return PrenomPersonnel;
    }

    //Setteurs
    public void setNumPatient(int nup){
	    this.NumPersonnel=nup;
    }
    public void setNom(String nop){
	    this.NomPersonnel=nop;
    }
    public void setPrenom(String pp){
	    this.PrenomPersonnel=pp;
    }

    //Constructeur
    /*
     * @param nup
     * @param nop
     * @param pp
     */
    public Personnel(int nup,String nop,String pp){
        this.NumPersonnel=nup;
        this.NomPersonnel=nop;
        this.PrenomPersonnel=pp;
    }

    //ToString
    @Override
    public String toString()
    {
        return "Personnel: Numero Personnel = "+ this.NumPersonnel + " Nom = " + this.NomPersonnel + " Prenom = " + this.PrenomPersonnel;
    }
}