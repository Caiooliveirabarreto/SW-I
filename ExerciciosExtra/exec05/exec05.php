<?php
    include_once 'funcionario.class.php';

    $funcionario1 = new Funcionario('João', 1300.25);

    $funcionario1->exibirInformacoes();

    $funcionario1->aumentarSalario(-20);

    $funcionario1->exibirInformacoes();
?>