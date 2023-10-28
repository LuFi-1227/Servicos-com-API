<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <script type="text/javascript" src="./utils/js/jquery.js"></script>  
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container" id="cad-entrada">
        <div class="body-div" id="search">
            <img src="./img/search.png" class="body-div-img">
            <input type="text" name="opt" class="entrada" placeholder="Busca">
        </div>
    </div>
    <div id="table">

    </div>
    <div class="container" id="button-cad">
    <a href="./cadUsers.php"><button>Cadastrar usuário</button></a>
    </div>
</body>
</html>

<script>
    var opcao = document.querySelector('[name="opt"]');

    opcao.addEventListener('keydown',function(){
        console.log(opcao.value);
        $.ajax({
            url: '../controller/controlPanelList.php',
            type: 'POST',
            data: {data: opcao.value},
            dataType: 'html',
            success: function(data){
                $("#table").html(data);
            },
        });
    })
</script>