<?php
    $nome = $_REQUEST['caixa_nome'];
    $n1 = $_REQUEST['n1'];
    $n2 = $_REQUEST['n2'];
    $n3 = $_REQUEST['n3'];
    echo "<h1>Nome preenchido é: $nome</h1><br>";
    
    $media = ($n1 + $n2 + $n3) / 3;

    echo "<h1> Sua média é: $media</h1>";
?>