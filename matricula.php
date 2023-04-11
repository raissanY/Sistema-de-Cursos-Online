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

<td><h3>Escolha Seu Curso</h3></td>
<table class = "table table-bordered">
<form method = "POST" action = 'php_action/matricula.php'>
    Selecionar <select name = 'idcurso'>
        <?php
        $sql = "SELECT * FROM cursos";
        $result = $con -> query($sql);
        if($result -> num_rows){
        while($row = $result -> fetch_assoc()){
            echo "<option name = 'idcurso' value = " . $row['idcurso'].">".$row['nomecurso']."</option>";
        }
        }
        ?>
        </select>
        


        <h4>Cursos Disponíveis</h4>
<div class="tabelaCursos">
<table class = "table table-bordered">
<thead>
<tr>
<th>Curso</th>
<th>Vagas Disponiveis</th>
<th>Preço</th>
</tr>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM cursos";
$result = $con -> query($sql); 
if($result -> num_rows > 0){ //n de linhas(1)//
while($row = $result -> fetch_assoc()){ //associa cada coluna uma posiçao de array(2)//
    //$row["nome"] o que fica dentro do [] é atributo do bd(3)//
    //? la de baixo é chamada de parametro(4)//
echo "<tr>
<td>".$row["nomecurso"]."</td> 
<td>".$row["vagasdispo"]."</td>
<td>".$row["preco"]."</td>
</tr>";
}
}else{
echo "<tr><td colspan='5'><center>Sem Dados a 
apresentar</center></td></tr>";
}
?>
<td><button type="submit" class = "btn btn-info">Inscrever-se</button></td>

</tbody>
</table>
</div>
</body>
</html>
