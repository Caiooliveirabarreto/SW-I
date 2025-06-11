<?php
    include_once 'aluno.class.php';

    $aluno1 = new Aluno(6 , 8 , 'Heitor');

    $aluno1->getMedia();
    $aluno1->getNome();

    $aluno1->verificarSituacao();


?>