
 <?php
    
    extract($_POST);
    extract($_FILES);
    require('connect-armas.php');
  
    $endereco = "img-armas/".md5(time()).".jpg";
    move_uploaded_file($foto['tmp_name'],$endereco);
    

    if(mysqli_query($con, "INSERT INTO `tb_armas` (`codigo`, `armas`, `descricao`,`preco`, `foto`) 
    VALUES (NULL, '$armas', '$descricao', '$preco', '$endereco');")){

        $msg = "<p class=yes>Registo criado com sucesso!</p>";
    }else{
        $msg = "<p class=no>Erro ao se registrar!</p>";
    }
    
    session_start();
    $_SESSION['msg']= $msg;
    header("location: lista.php");

    ?>