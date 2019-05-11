package model;
public class Cliente {
  private int quarto;
  private String nome;
  private String telefone;
  private double dispesa;
   public int getQuarto(){
       return quarto;
   }
    public void setQuarto(int quarto){
        this.quarto = quarto;
    }
    public String getNome(){
        return nome;
    }
    public void setNome(String nome){
        this.nome = nome;
    }

    public String getTelefone() {
        return telefone;
    }

    public void setTelefone(String telefone) {
        this.telefone = telefone;
    }

    
}
