<?php 

class MedicacaoDAO {
    private function CriaConexao()
    { 
        $conexao = mysqli_connect("localhost","root","","TESTE");
        return $conexao;
    }
    public function inserir($medicacao)
    {                
        $conn = $this->CriaConexao();
        $sql = 'INSERT INTO `Medicacao` (nome_medicacao,codigo,nome_fabricante,controle,quantidade,preco) VALUES (?,?,?,?,?,?)';
       // $vetor = array($medicacao->getNome_medicacao(),getCodigo(),getNome_fabricante(),getControle(),getQuantidade(),getPreco());
        echo $sql;
        $res = mysqli_query($conn,$sql);
        $linha = mysqli_fetch_array($res);
        mysqli_close($conn);
    }   
 
}
?>