<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        // Construtor

        public function __construct($nome, $preco = 0, $quantidade = 0){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quantidade = $quantidade;
        } 

        // Getters
        public function getNome(){
            echo 'O nome do produto é: ' . $this->Nome;
            // return $this->Nome;
        }

        public function getPreco(){
            echo 'O nome do produto é: ' . $this->Preco;
            // return $this->Preco;
        }

        /*public function getQuant(){
            echo 'O nome do produto é: ' . $this->Quantidade;
            // return $this->Quantidade;
        }*/

        // Setters

        public function setNome($nome /* Qualquer varíavel */ ){
            $this->Nome = $nome;
        }

        public function setPreco($preco){
            if($valor < 0){
                echo 'Valor Inválido';
            }
            else{
                $this->Preco = $preco;
            }
        }

        // Outros métodos

        public function AdicionarEstoque($quant){
            if($quant < 0){
                echo 'Quantidade inválida' . '<br>';
            }
            else{
                $this->Quantidade += $quant;
            }
        }

        public function RemoverEstoque($quant){
            if($quant > $this->Quantidade && $quant < 0){
                echo 'Operação Inválida' . '<br>';
            }
            else{
                $this->Quantidade -= $quant;
            }
            
        }
        
        public function MostrarDetalhes(){
            echo 'Nome do produto: ' . $this->Nome . '<br>'; /* OU $this->'NomeFunção'() */
            echo 'Preço do produto: ' . 'R$' . number_format($this->Preco, 2, '.')  . '<br>';
            echo 'Quantidade em Estoque: ' . $this->Quantidade . '<br>';
        }

    }

?>