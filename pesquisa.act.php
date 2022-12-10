<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pesquisa.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
 
 $texto = $_GET['texto'];

 require('connect-armas.php');
    if(! $texto == ""){

    
 $cadastro = mysqli_query($con, " Select * from `tb_armas` where `armas` like '%$texto%' or `descricao` like '%$texto% or `preco` like '%$texto%' ");

 echo "<div class=geral>";
            while($cadastro = mysqli_fetch_array($cadastro)){
                
                echo "<div class=box-pesq>";
                echo "<p id= pag>$cadastro[armas]</p>";
                echo "<p id= pag>Descrição:$cadastro[descricao]</p>";
                echo "<p id= pag>Preço:$cadastro[preco]</p>";
                echo "<p id= pag><img src=$cadastro[foto]></p>";

                @session_start();
                if($_SESSION['login'] == true && $_SESSION['funcao'] == "cli"){
                echo "<h3 id= pag ><a href=comprar.php>COMPRAR</a></h3>";
            }if($_SESSION['login'] == true && $_SESSION['funcao'] == "admin"){

                echo "<h4 id= pag ><a href=alterar.php?cod=$cadastro[codigo]>Alterar</a></h4>";
                echo "<h4 id= pag ><a href=javascript:confirmar($cadastro[codigo])>Excluir</a></h4>";
            }
            if($_SESSION['login'] == false){
                echo "<h3 id= pag ><a href=login.php>COMPRAR</a></h3>";

            }
                
                echo "</div>";
            }
echo "</div>";
}

?>
<script>
  
  function confirmar(codigo){
    resposta = confirm("Deseja excluir o registro" + "-"+codigo+"?");

    if(resposta == true){
      window.location = "Excluir.php?cod="+codigo;
    }
  }
    
  </script>