<?php

    class Aluno{
        private $nota1;
        private $nota2;
        private $Nome;
        private $Media;

        public function __construct($nota_1,$nota_2, $Nome, $Media = 0){
            $this->nota1 = $nota_1;
            $this->nota2 = $nota_2;
            $this->Nome = $Nome;
        }
    
        public function getNota1(){
            return $this->nota1;
            
        }
        public function getNota2(){
            return $this->nota2;
            
        }
        
        public function getNome(){
            return 'O Nome do Aluno é: ' . $this->Nome;
        }

        public function getMedia(){
            $nota1 = $this->getNota1();
            $nota2 = $this->getNota2();
            $Media = ($nota1+ $nota2) / 2;
            return 'A média do aluno foi: ' . $Media;
            
        }

        public function verificarSituacao(){
            $media = $this->getMedia();
            if ($media >= 7) {
                echo 'o Aluno foi Aprovado!';
            }
            else{
                echo 'o Aluno foi Reprovado!';            
            }
        }
        
    }


?>