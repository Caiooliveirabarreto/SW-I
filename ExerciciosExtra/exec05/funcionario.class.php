<?php
    class Funcionario{
        private $Nome;
        private $Salario;

        function __construct($nome, $salario){
            $this->Nome = $nome;
            $this->Salario = $salario;
        }

        function aumentarSalario($porcentagem){
            if($porcentagem < 0 || $porcentagem == 0){
                echo 'Essa porcentagem não é um valor válido';
                echo '<br>';
            }
            else{
                $porcentagemMultipli = $porcentagem / 100;
                $salarioNovo = $this->Salario + $this->Salario * $porcentagemMultipli;
                $this->Salario = $salarioNovo;
                return $salarioNovo;
            }
        }


        function exibirInformacoes(){
            echo 'O nome do funcionário é: ' . $this->Nome;
            echo '<br>';
            echo 'O salário do funcionário é: ' . $this->Salario;
            echo '<hr>';
        }
    }


?>