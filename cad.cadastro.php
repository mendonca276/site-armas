
<?php


extract($_POST);
extract($_FILES);
require('connect.php');
$senha = md5($senha);


$msg = "";
if(mysqli_query ($con, "INSERT INTO `tb_cadastro` (`codigo`, `nome`, `email`, `cpf`, `funcao`, `senha`) VALUES (NULL, '$nome', '$email', '$cpf', '$funcao', '$senha');")){
    $msg = "<p class = sucesso>Registro criado com sucesso!</p>";
    }else{
        $msg = "<p class=erro>Erro ao criar registro!</p>";
    }
    @session_start();
    $_SESSION['msg'] = $msg;


 header("location:login.php");
