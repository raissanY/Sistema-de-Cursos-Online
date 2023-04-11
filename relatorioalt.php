<?php require_once 'php_action/conexao.php'; //serve para interligar os arquivos(5)//?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min
.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundl
e.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</head>
<body>

<br><br> <button onclick = "window.print()">Imprimir a pagina</button>

<table class = "table table-bordered">
<thead>
<tr>
<th>Id dos alunos</th>
<th>Alunos</th>
<th>Email</th>
</tr>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM aluno";
$result = $con -> query($sql); 
if($result -> num_rows > 0){ //n de linhas(1)//
while($row = $result -> fetch_assoc()){ //associa cada coluna uma posiçao de array(2)//
    //$row["nome"] o que fica dentro do [] é atributo do bd(3)//
    //? la de baixo é chamada de parametro(4)//
echo "<tr>
<td>".$row["idaluno"]."</td> 
<td>".$row["nome"]."</td>
<td>".$row["email"]."</td>
</tr>";
}
}else{
echo "<tr><td colspan='5'><center>Sem Dados a 
apresentar</center></td></tr>";
}
?>
<a href="site.php"><button type="button" class="btn btn-info">Voltar</button></a>
</tbody>
</table>
</div>
</body>
</html>