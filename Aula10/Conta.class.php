<?php
    class Conta{
        public $Nome;
        public $CPF;
        private $Saldo;

        public function Sacar($valor){
            if ($valor > $this->Saldo) {
                $resultado = 'Saldo Insuficiente.'; 
                return $resultado;
            }
            else{
                $resultado = 'Saldo atualizado para R$';
                $this->Saldo -= $valor;
                return $resultado . $this->Saldo;
            }
        }
        
        public function Depositar($valor){
            $resultado = 'Saldo atualizado para R$';
            $this->Saldo += $valor;
            return $resultado . $this->Saldo; 
        }
        
        public function ConsultarSaldo(){
            echo "Nome: ". $this->Nome . "<br>";
            echo "CPF: ". $this->CPF . "<br>";
            echo "Saldo Atual R$". $this->Saldo . "<br>";
        }
    }

?>