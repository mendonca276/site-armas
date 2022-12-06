<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/alter.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
 
</head>
<body>

<div class="men">
    <?php
      $codigo = $_GET['cod'];
      require('connect.php');
      $buscar = mysqli_query($con, "Select * from `tb_armas` where `codigo` = '$codigo'");
      $contato = mysqli_fetch_array($buscar);
?> 
</div>

<div class="pai">

    <fieldset id="">
        <legend>Alterar</legend>
        
        <form action="alterar.act.php" method="post" onsubmit="return verifica(armas.value,descricao.value,preco.value)" enctype="multipart/form-data">
        <input type="hidden" name="codigo"  value="<?php echo $contato['codigo'];?>">
        <input type="hidden" name="foto_anterior"  value="<?php echo $contato['foto'];?>">
            <p class="">Armas</p>
            <input type="text" name="armas" id="box-input"
             value="<?php echo $contato['armas'];?>">
             <p class="">Descrição</p>
            <input type="text" name="descricao" id="box-input"
             value="<?php echo $contato['descricao'];?>"> 
            <p class="">Preço</p>
            <input type="text" name="preco" id="box-input" 
             value="<?php echo $contato['preco'];?>">
            <br><br>
            <p><input type="file" name="foto" id=""></p>
            <input type="submit" value="Enviar" class="botao" value="Gravar">
            
        </form>
        
    <?php
    session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
    ?>
    </fieldset>

</div>
    
</body>
</html>