<?php
require_once("class.php");
require_once("DAO.php");

print($_POST["fabricante"]);
$med = new Medicacao($_POST["medicacao"],$_POST["codigo"],$_POST["fabricante"],$_POST["controle"],$_POST["quantidade"],$_POST["preco"]);
$dmed = new MedicacaoDAO();
$dmed->inserir($med);

/*($conexao = mysqli_connect("localhost","root","","TESTE");
//$condb = mysql_select_db("TESTE",$conexao) or print (mysql_error()); 

$query = "SELECT nome_medicacao,codigo,nome_fabricante,controle,quantidade,preco FROM Medicacao";

$resultado = mysqli_query($conexao,$query);
?>
<table border="1"><tr>
	<td><b>nome da medicacao</b></td>
    <td><b>codigo</b></td>
    <td><b>nome do fabricante</b></td>
	<td><b>controle</b></td>
	<td><b>Quantidade</b></td>
    <td><b>Preço</b></td>
</tr>

<?php


while($linha = mysqli_fetch_array($resultado)){
    echo "<tr><td>".$linha['nome_medicacao']."</td><td>".$linha['codigo']."</td><td>".$linha['nome_fabricante']."</td><td>".$linha['controle']."</td><td>".$linha['quantidade']."</td><td>".$linha['preco'];
}

mysqli_close();
*/
?>
