<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de novo usuário</title>
</head>
<body>
    <form action="../controller/cadPanel.php" method="post">
            <label for="">Usuario:</label>
            <input type="text" name="user" value="LuFi" required>
            <label for="">Senha</label>
            <input type="text" name="Pass" value="senha" required>
            <label for="">Nome</label>
            <input type="text" name="name" value="Louis" required>
            <label for="">Email</label>
            <input type="text" name="email" value="senha@gmail.com" required>
            <button type="submit">Entrar</button>
    </form>
</body>
</html>