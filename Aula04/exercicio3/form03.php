<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - Formulários</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="processa03.php" method="post">
        <p>Digite seu nome: <input type="text" name="caixa_nome" id="" required></p>
        <p>Digite sua senha: <input type="password" name="senha" id="" required></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>