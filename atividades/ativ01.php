<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - usuário e senha</title>
</head>
<body>
    <h1>Faça seu login</h1>
    <!-- pasta onde vai as informações -->
    <form action="processa.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome"><br>

        <label for="login">Login:</label><br>
        <input type="text" name="login"><br>

        <label for="senha">Senha</label><br>
        <input type="password" name="senha"><br>

        <input type="submit" value="Enviar">
    </form>
 
</body>
</html>