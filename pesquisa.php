<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/pesquisa.css">
    <title>Document</title>
    
</head>

<script>
    function pesquisar(texto){
        $.ajax({
            type: "post",
            url: "pesquisa.act.php?texto="+texto,
            success: function (response) {
                $('#result').html(response);
            }
        })
    }
</script>

<body>
    
    <input type="text" id="txtPesquisa" onkeyup="pesquisar(this.value)" placeholder="Pesquisar Armas">
     <div id="result">
        
     </div> 
    
</body>
</html>