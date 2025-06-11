<?php
    class Livro{
        private $titulo;
        private $autor;
        private $disponivel;

        function __construct($titulo, $autor, $disponivelparam){
            if (is_bool($disponivelparam) === True) {
                
            }
            else{
                $disponivelparam = false;
            }
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->disponivel = $disponivelparam;
        }

        function emprestaLivro(){
            if ($this->disponivel = false) {
                $this->disponivel = true;
                echo "Você pegou um livro emprestado";
            }
            else{
                echo "O livro já está emprestado";
            }
        }
        function devolveLivro(){
            if ($this->disponivel = false) {
                $this->disponivel = true;
                echo "O livro foi devolvido com sucesso!";
            }
            else{
                echo "O livro já foi devolvido!";
            }
        }
        function exibirStatus(){
            $DisponivelString = $this->disponivel ? 'True' : 'False';
            echo "O livro está disponível? " . $DisponivelString;
;
        }
    }


?>