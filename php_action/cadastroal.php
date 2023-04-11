<?php
require_once 'conexao.php';

$login = $_POST['login'];
$senha = ($_POST['senha']);
$email = $_POST['email'];

$query = "SELECT * FROM aluno WHERE email = '$email' or senha = '$senha'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if (isset($_POST['senha']) && !empty($_POST['email'])) {

    if($row) {
        echo "Esse nome de usuário ou senha já está sendo usado";
        echo "<a href='../cadastroal.php'><button>TENTAR NOVAMENTE</button></a>";
    }
    else{
        // Inserir o registro somente se o valor da chave primária não existir
        $sql = "INSERT INTO aluno (idaluno, nome, senha, email) VALUES ('null', '$login', '$senha', '$email')";
    }
        if ($con->query($sql) === TRUE) {
            echo "<p>Usuário criado com sucesso!</p>";
            echo "<a href='../login.php'><button>LOGAR</button></a>";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }else {

        echo 'Insira uma senha válida.';
        echo "<a href='../cadastroal.php'><button>TENTAR NOVAMENTE</button></a>";
    }

$con->close();
?>