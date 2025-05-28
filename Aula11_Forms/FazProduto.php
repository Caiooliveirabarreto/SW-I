<?php
    include_once 'exec.class.php';

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $qtd = $_POST['quant'];

    $produto = new Produto($nome, $preco, $qtd);

    $produto->AdicionarEstoque(5);
    $produto->RemoverEstoque(3);
    $produto->MostrarDetalhes();    
?>