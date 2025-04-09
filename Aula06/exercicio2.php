<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="processa.php" method="post" class="form">
        <div class="form">
            <label for="linhas">Digite um número de linhas: </label>
            <input type="number" name="linhas" id="linhas" required />
        </div>
        <div class="form">
            <label for="colunas">Digite um número de colunas: </label>
            <input type="number" name="colunas" id="colunas" required />
        </div>
        <div class="form">
            <input type="submit" value="enter"/>
        </div>
    </form>
</body>
</html>