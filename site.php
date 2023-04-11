
<a href="sair.php"><button type="button" class="btn btn-info">Sair</button></a>

<?php 
require_once 'php_action/conexao.php';

session_start();
$login=$_SESSION['login'];
echo "<h2>Olá $login</h2>";
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:site.php');
  }
  
 
?>

<h2>O que você deseja fazer?</h2>
<p>-> Cadastrar novo curso</p>
<a href="cadastroc.php"><button type="button" class="btn btn-info">Cadastrar Novo Curso</button></a>
<p>-> Verificar Relatório de Cursos Por Aluno</p>
<a href="relatorioal.php"><button type="button" class="btn btn-info">Verificar</button></a>
<p>-> Verificar de vagas por curso</p>
<a href="relatoriovagas.php"><button type="button" class="btn btn-info">Verificar</button></a>
<p>-> Verificar lista de alunos</p>
<a href="relatorioalt.php"><button type="button" class="btn btn-info">Verificar</button></a>



