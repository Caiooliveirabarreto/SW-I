<?php
    $nome = $_POST['caixa_nome'];
    $senha = $_POST['senha'];

    if ($nome == "etec" && $senha == "informatica"){
        echo "<h2>Logado com sucesso</h2>";
    }
    else{
        echo "<h2>Senha e/ou login errado</h2>";
    }
?>