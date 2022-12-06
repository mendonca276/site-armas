<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <title>Document</title>
</head>
<body>

<!-- Arrumar cor do menu -->



<ul>
    <?php
    @session_start();
     if($_SESSION['funcao'] == "admin"){
       echo "<li class=right><a href=cad.armas.php>CADASTRAR ARMAS</a>
       
       </li>";
       echo "<li class=left><a href=sair.php>SAIR</a></li>";
      }else{
  
        echo "<li class=left><a href=sair.php>SAIR</a></li>";
      }

    ?>
    </ul>

</body>
</html>
