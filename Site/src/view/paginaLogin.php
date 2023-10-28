<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="./utils/js/jquery.js"></script>
</head>
<body>
    <div>
        <form action="../controller/controlPanelLogin.php" method="post">
            <label for="">Usuario:</label>
            <input type="text" name="user" value="LuFi-1227" required>
            <label for="">Senha</label>
            <input type="text" name="Pass" value="senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>