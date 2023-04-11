<!DOCTYPE html>
<html>
<head>
<title>ADICIONAR ALUNO</title>
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
<style type="text/css">
/*
fieldset{
margin:auto;
margin-top: 100px;
width:50%;
}
table tr th{
padding-top: 20px;
}*/
</style>
<body>
<fieldset>
<legend>Cadastrar</legend>
<form action="php_action/cadastroal.php" method="post" class = "form-group">
<table cellspacing="0" cellpadding="0">
<tr>
<th>Nome do Aluno</th>
<td><input class = "form-control" type="text"
name="login" placeholder="login"></td>
</tr>
<tr>
<th>Email</th>
<td><input class = "form-control" type="text"
name="email" placeholder="email"></td>
</tr>
<tr>
<th>Senha</th>
<td><input class = "form-control" type="number"
name="senha" placeholder="Senha"></td>
</tr>
<tr>
<td><button type="submit" class = "btn btn-info">Salvar Dados</button></td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>