<?php 
require_once 'conexao.php';
session_start();
$idaluno=$_SESSION['idaluno'];


if($_POST){
    $idcurso = $_POST['idcurso'];
    echo $idcurso;
}

    $sql = $con -> query("INSERT INTO relacao (idcursar, idaluno, idcurso) VALUES ('0', '$idaluno', '$idcurso')"); 

    $sql2 = "UPDATE cursos SET vagasdispo = vagasdispo - 1 WHERE idcurso=$idcurso";
if($con -> query($sql2)){

}

$sql3 = "UPDATE cursos SET vagasp = vagasp + 1 WHERE idcurso=$idcurso";
if($con -> query($sql3)){}

if($sql === TRUE){
    echo "<p> Novo Curso cadastrado com sucesso!</p>";
}else{
    echo "Erro ".$sql. ' '.$con -> con_error;
}

    $con -> close(); 





?>