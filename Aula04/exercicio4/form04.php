<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - Formulários</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="processa04.php" method="post">
        <p>Digite seu nome: <input type="text" name="nome" id="" required></p>
        <p>Digite seu email: <input type="text" name="email" id="" required></p>
        <p>Digite sua Data de nascimemto: <input type="date" name="dataNascimento" id="" required></p>
        <select name="bandeiraCartao">
            <option value="Mastercard"> Mastercard </option>
            <option value="AmericanExpress"> American Express </option>
            <option value="Visa"> Visa</option>
            <option value="Elo">Elo</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>