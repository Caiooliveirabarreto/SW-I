<?php
    class Lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;
        
        public function Ligar(){
            $this->Status = TRUE;
        }
       public function Desligar(){
            $this->Status = FALSE;
       }
        public function MostrarDados(){
            echo "Fabricante: " . $this->Fabricante . "<br>";
            echo "Tensão: " . $this->Tensao . "<br>";
            echo "Potência: " . $this->Potencia . "<br>";
            echo "Cor: " . $this->Cor . "<br>";
            if($this->Status == TRUE){
                echo "Status: Ligado" . "<br>";
            }
            else{
                echo "Status: Desligado" . "<br>";
            }           
            echo "<hr>"; 
        }
    }

?>