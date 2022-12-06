<?php

$codigo  = $_GET['cod'];
require('connect-armas.php');

if(mysqli_query($con, "DELETE FROM `tb_armas` WHERE `tb_armas`.`codigo` = $codigo")){
    $msg = "<p class= sucesso> Excluido com sucesso!</p>";
}else{
    $msg = "<p class= erro> Erro ao excluir!</p>";
}


@session_start();
$_SESSION['msg'] = $msg;


header("location: lista.php");



?>