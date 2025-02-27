<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css">
</head>
<body>
<div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
      
    </div>
    <div class="col">
        <?php
            $nome = $_POST['caixa_nome'];
            $mensagem = $_POST['caixa_mensagem'];
            echo "<h1>Nome enviado é: $nome</h1><br>";
            echo "<h1>mensagem enviada é: $mensagem</h1>";
        ?>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
</body>
</html>



