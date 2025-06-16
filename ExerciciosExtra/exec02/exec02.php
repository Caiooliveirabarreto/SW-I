<?php
    include_once 'aluno.class.php';

    $aluno1 = new Aluno(5 , 8 , 'Heitor');

    echo $aluno1->getMedia() . '<br>';
    echo $aluno1->getNome() . '<br>';

    $aluno1->verificarSituacao();


?>