package dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import javax.swing.JOptionPane;
import model.Cliente;

public class clienteDao {
     Connection con = null;
    //MÃ©todo construtor
    public clienteDao(){
        con = Conexao.abrirConexao();
    }    
    public void salvar(Cliente cliente){
        try {
            String sql = "INSERT INTO usuario(quarto, nome, telefone) VALUES (?, ?, ?)";
            PreparedStatement ps = con.prepareStatement(sql);
            ps.setInt(1, cliente.getQuarto());
            ps.setString(2, cliente.getNome());
            ps.setString(3, cliente.getTelefone());
            

            if(ps.executeUpdate() != 0){
                JOptionPane.showMessageDialog(null, "Cadastrado com sucesso");
            }else{
                JOptionPane.showMessageDialog(null, "Erro ao cadastrar");
            }
           
        } catch (Exception e) {
        }
    }

    private static class Conexao {

        private static Connection abrirConexao() {
            throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        }

        public Conexao() {
        }
    }
    
   
}
