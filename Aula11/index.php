<?php
    include_once 'exec.class.php';

    $produto = new Produto('Mouse', 150.00, 10);

    $produto->AdicionarEstoque(5);
    $produto->RemoverEstoque(3);
    $produto->MostrarDetalhes();    

?>