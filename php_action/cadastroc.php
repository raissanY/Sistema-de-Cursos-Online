<?php 
require_once 'conexao.php';
if($_POST){
    $nomecu = $_POST['curso'];
    $vagas = $_POST['vagas'];
    $preco = $_POST['preco'];
    $sql = "INSERT INTO cursos (idcurso,nomecurso,vagasdispo,preco) VALUES ('0','$nomecu','$vagas','$preco')"; 
if($con -> query($sql) === TRUE){
    echo "<p> Novo Curso cadastrado com sucesso!</p>";
}else{
    echo "Erro ".$sql. ' '.$con -> con_error;
}
    $con -> close(); 
}


?>

