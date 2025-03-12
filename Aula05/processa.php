<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($senha == '1234' && $email == "aluno@email.com"){
        // Mandar para autorizado.php
        // echo "Autorizado";
        header('Location: painel/autorizado.html');
    }else{
        // Mandar para naoautorizado.php
        // echo "Não autorizado";
        header('Location: painel/naoautorizado.html');
    }
?>