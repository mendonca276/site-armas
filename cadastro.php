<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cadastro.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
</head>
<body>
    
    
    <div class="pai">

        <div class="home">
            <a href="home.php">HOME</a>
        </div>

        <form action="cad.cadastro.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>CADASTRO</legend>
                
                <div class="inp">
                <p>Nome:</p>
                <input type="text" name="nome" id="">
                <p>Email:</p>
                <input type="email" name="email" id="">
                <p>CPF:</p>
                <input type="text" name="cpf" id="">
                <p>Função:</p>

                <!-- Arrumar e adentar codigo..  -->
                <!-- Tirar os <br> e arrumar no CSS os espaçamento do jeito que  esta na tela.. -->
                <!-- Deixar o codigo visivel.. -->

                <br>
                <p>Admin</p>
                <input type="radio" name="funcao" id="" value="admin">
                <p>Cliente</p>
                <input type="radio" name="funcao" id="" value="cli">

                <br><br>
                <p>Senha:</p>
                <input type="password" name="senha" id="">

                <br><br>
                <p><input type="submit" value="CONTINUAR" id=""></p>

                </div>
            </fieldset>
        </form>
    </div>
    
</body>
</html>