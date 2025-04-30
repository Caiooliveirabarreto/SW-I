<?php
    include_once 'Pessoa.class.php';

    // Criar um Objeto - Instância da Classe Pessoa
    $fulano = new Pessoa();
    $ciclano = new Pessoa();
    //var_dump($fulano);

    // Atribuir Valores
    $fulano->Nome = "Fulano Da Silva";
    $fulano->Peso = 90;
    $fulano->Altura = 1.82;

    $ciclano->Nome = "Ciclano Da Silva";
    $ciclano->Peso = 70;
    $ciclano->Altura = 1.50;
    // Chamando um método da classe Pessoa
    $fulano->Apresentar();    
    $ciclano->Apresentar();    


?>