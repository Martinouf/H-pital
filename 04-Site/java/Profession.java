public class Profession {
    //Attributs
    private int CodePro;
    private String TypePro;

    //Getteurs
    public int getCodePro()
    {
	    return CodePro;
    }
    public String getTypePro()
    {
	    return TypePro;
    }

    //Setteurs
    public void setCodePro(int cp){
	    this.CodePro=cp;
    }
    public void setTypePro(String tp){
	    this.TypePro=tp;
    }

    //Constructeur
    /*
     * @param cp
     * @param tp
     */
    public Profession(int cp,String tp){
        this.CodePro=cp;
        this.TypePro=tp;
    }

    //ToString
    @Override
    public String toString()
    {
        return "Profession: Code Profession = "+ this.CodePro + " Type Profession = " + this.TypePro;
    }
}