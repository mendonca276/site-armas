
<?php
extract($_POST);
var_dump($_POST);
$senha = md5($senha);


require('connect.php');
@session_start();
$buscar = mysqli_query($con, "select * from `tb_cadastro` where `email` = '$email'" );
$msg = "email ou senha invalidos";
$target = "";

    if($buscar -> num_rows == 1){
        $login = mysqli_fetch_array($buscar);
        if($senha === $login['senha']){
            $_SESSION['login'] = true;
            $_SESSION['email'] = $login['email'];
            $_SESSION['funcao'] = $login['funcao'];

            $target = "location:lista.php";
            $msg = "";
        }
    

    }else{
        $msg = "email ou senha invalidos ";
        $target = "location:login.php";
    }
    echo "<p>$msg</p>";
    echo "<p>$target</p>";
    $_SESSION['msg'] = $msg;
    header($target);
