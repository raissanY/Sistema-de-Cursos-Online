<?php
require_once "php_action/conexao.php";

?>
<html>
<h1>Aluno em cada curso</h1>
<table class = "table table-bordered">
<form method = "POST">
    Cursos <select name = 'idcurso'>
        <?php
        $sql = "SELECT * FROM cursos";
        $result = $con -> query($sql);
        if($result -> num_rows){
        while($row = $result -> fetch_assoc()){
            echo "<option value = " . $row['idcurso'].">".$row['nomecurso']."</option>";
        }
        }
        ?>
        </select>-
        <button type="submit" class = "btn btn-alert">Pesquisar</button>

<table class = "table table-bordered">
<thead>
<tr>
<th>Nome</th>
<th>Curso</th>
<th>Preço</th>
</tr>
    </div>
<?php
$idcurso = $_POST['idcurso'];

$sql = "SELECT alu.nome, cur.nomecurso, cur.preco, alu.email
from aluno as alu, cursos as cur, relacao as rel
where alu.idaluno=rel.idaluno and cur.idcurso=rel.idcurso and rel.idcurso=$idcurso";
$result = $con -> query($sql);

if($result->num_rows > 0){
while($row = $result -> fetch_assoc()){
  echo "<tr>";
  echo "<td>".$row['nome']."</td>";
  echo "<td>".$row['nomecurso']."</td>";
  echo "<td>".$row['preco']."</td>";
  echo "</tr>";
  }
  }else{
  echo "<tr><td colspan='5'><center>Sem Dados a 
  apresentar</center></td></tr>";
}

?>

<a href="site.php"><button type="button" class="btn btn-info">Voltar</button></a>

<br><br> <button onclick = "window.print()">Imprimir a pagina</button>
</html>