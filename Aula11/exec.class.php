<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        // Construtor

        public function __construct($nome, $preco, $quantidade = 0){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quantidade = $quantidade;
        } 

        // Getters
        public function getNome(){
            echo 'O nome do produto é: ' . $this->Nome;
        }

        public function getPreco(){
            echo 'O nome do produto é: ' . $this->Preco;
        }

        public function getQuant(){
            echo 'O nome do produto é: ' . $this->Quantidade;
        }

        // Setters

        public function setNome($nome){
            $this->Nome = $nome;
        }

        public function setPreco($preco){
            $this->Preco = $preco;
        }
        
        public function setQuant($quantidade){
            $this->Quantidade = $quantidade;
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
            if($quant > $this->Quantidade){
                echo 'Operação Inválida' . '<br>';
            }
            else{
                $this->Quantidade -= $quant;
            }
            
        }
        
        public function MostrarDetalhes(){
            echo 'Nome do produto: ' . $this->Nome . '<br>';
            echo 'Preço do produto: ' . 'R$' . number_format($this->Preco, 2, '.')  . '<br>';
            echo 'Quantidade em Estoque: ' . $this->Quantidade . '<br>';
        }

    }

?>