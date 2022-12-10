<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="imgs/gun-store.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  

    <div class="corpo">
        <div class="menu">
            <div class="esq">
            </div>
            <div class="center">

            </div>
            <div class="dire">
              
                <div class="login"> <a href="login.php"> <h4> LOGIN </h4> </a></div>
                
            </div>
        </div>

        <div class="txt">
            <h1> Compre com a Selva!</h1>
        </div>
    </div>
    
       


<?php


        require('connect-armas.php');
        $cadastros = mysqli_query($con,"Select * From `tb_armas` ORDER BY `codigo`");
        echo "<div class=\"box\">";
        while($cadastro = mysqli_fetch_array($cadastros)){
          echo "<div class=\"sc\">";
         
          //Validação de foto
          if($cadastro['foto'] != ""){
          echo "<p><img src=$cadastro[foto]></p> ";
          }else{
          echo "<p><img src=imgs/default.png></p>";
          }

          echo "<p id= pag >$cadastro[armas]</p>";
          echo "<p id= pag >Descricão: $cadastro[descricao]</p>";
          echo "<p id= pag >Preço: $cadastro[preco]</p>";
          echo "<h3 id=pag ><a href=login.php>COMPRAR</a></h3>";

          echo "</div>";
         
        }
        echo "</div>";

       
        
            
        ?>


</body>
</html>