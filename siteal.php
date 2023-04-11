<?php

require_once 'php_action/conexao.php';

session_start();
$idaluno = $_SESSION['idaluno'];
$login=$_SESSION['login'];
$email=$_SESSION['email'];
$senha=$_SESSION['senha'];
echo "<h2>Olá $login</h2>";


if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:site.php');
  }
  ?>

<h3>Não está matriculado? Venha fazer parte e matricule-se já!</h3>
<a href="matricula.php"><button type="button" class="btn btn-info">Matricular</button></a>
<a href="sair.php"><button type="button" class="btn btn-info">Sair</button></a>


<table border ="1px" class = "table table-bordered">
<thead>
<tr>
<th>Cursos</th>
<th>Preço</th>
</tr>
  <tbody>
<?php

$sql = "SELECT alu.nome, cur.nomecurso, cur.preco
  from aluno as alu, cursos as cur, relacao as rel
  where alu.idaluno=rel.idaluno and cur.idcurso=rel.idcurso and email='$email'";

$result = $con -> query($sql);

if($result->num_rows > 0){
while($row = $result -> fetch_assoc()){
  echo "<tr>";
  echo "<td>".$row['nomecurso']."</td>";
  echo "<td>".$row['preco']."</td>";
  echo "</tr>";
  }
  }else{
  echo "<tr><td colspan='5'><center>Sem Dados a 
  apresentar</center></td></tr>";
}
?>
</div>
</tbody>
</table>
    

</body>
</html>