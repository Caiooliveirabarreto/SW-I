<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($senha == '1234' && $email == "aluno@email.com"){
        // Mandar para autorizado.php
        // echo "Autorizado";
        $nome = "Aluno";
        header('Location: painel/autorizado.php?nome='.$nome );
    }else{
        // Mandar para naoautorizado.php
        // echo "Não autorizado";
        header('Location: painel/naoautorizado.html');
    }
?>