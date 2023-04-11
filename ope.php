<?php require_once 'php_action/conexao.php';
session_start(); 

$login = $_POST['login'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$result = $con->query("SELECT * FROM aluno WHERE senha = '$senha' AND email = '$email'");
while ($row = mysqli_fetch_assoc($result)){
    $idaluno = $row['idaluno'];
}
if(mysqli_num_rows($result) > 0){
    $_SESSION['idaluno'] = $idaluno;
    $_SESSION['login'] = $login;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    
header('location:siteal.php');
}
else{   
    $result2 = $con->query("SELECT * FROM adm WHERE senha = '$senha' AND email = '$email'");
    while ($row = mysqli_fetch_assoc($result2)){
        $idadm = $row['idadm'];
    }
    if(mysqli_num_rows($result2) > 0){
    
        $_SESSION['idadm'] = $idadm;
        $_SESSION['login'] = $login;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        
    header('location:site.php');
    }
    else{   
       unset ($_SESSION['login']);
       unset ($_SESSION['email']);
       unset ($_SESSION['senha']);
       
       header('location:index.php');
    }
   
   
}


?>