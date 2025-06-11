<?php

    class Aluno{
        private $nota1;
        private $nota2;
        private $Nome;
        private $Media;

        function __construct($nota_1,$nota_2, $Nome, $Media = 0){
            if($nota_1 = 0 || $nota_1 < 0 || $nota_2 = 0 || $nota_2 < 0){
                echo "Valor não válido, por favor insira de novo.";
            }
            else{
                $this->nota1 = $nota_1;
                $this->nota2 = $nota_2;
            }
            $this->Nome = $Nome;
        }
    
        function getNome(){
            echo 'O nome do Aluno é: ' . $this->Nome . "<br>";
        }

        function getMedia(){
            $Media = ($this->nota1 + $this->nota1) / 2;
            echo 'A média de nota foi: ' . $Media . "<br>";
        }

        function verificarSituacao(){
            if ($Media >= 7) {
                echo "Aprovado!" . "<br>";
            }
            else{
                echo 'Reprovado'. "<br>";
            }
        }
        
    }


?>