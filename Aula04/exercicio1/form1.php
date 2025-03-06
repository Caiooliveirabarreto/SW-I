<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - Formulários</title>
</head>
<body>
    <h1>Exercicio - 1</h1>
    <form action="processa01.php" method="get">
        <p>Digite seu nome: <input type="text"  name="caixa_nome" id="" required></p>
        <p>Digite uma nota: <input type="number"  min="1" max="10" name="n1" id="" required></p>
        <p>Digite outra nota: <input type="number"  min="1" max="10" name="n2" id="" required></p>
        <p>Digite a última nota: <input type="number"  min="1" max="10" name="n3" id="" required></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>