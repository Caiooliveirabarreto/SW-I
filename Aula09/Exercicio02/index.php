<?php
    include_once 'Carro.class.php';

    $Carro1 = new Carro();
    $Carro1->Marca = "Mercedes";
    $Carro1->Modelo = "Classe X";
    $Carro1->Combustivel = "Gasolina";
    $Carro1->Portas = "4";
    $Carro1->Capacidade_tanque = "40L";
    $Carro1->MostrarDados();

    $Carro2 = new Carro();
    $Carro2->Marca = "Audi";
    $Carro2->Modelo = "A6";
    $Carro2->Combustivel = "Gasolina";
    $Carro2->Portas = "4";
    $Carro2->Capacidade_tanque = "60L";
    $Carro2->MostrarDados();


    $Carro3 = new Carro();
    $Carro3->Marca = "Lamborghini";
    $Carro3->Modelo = "Gallardo";
    $Carro3->Combustivel = "Gasolina";
    $Carro3->Portas = "2";
    $Carro3->Capacidade_tanque = "30L";
    $Carro3->MostrarDados();


    $Carro4 = new Carro();
    $Carro4->Marca = "Fiat";
    $Carro4->Modelo = "Uno Mille";
    $Carro4->Combustivel = "Flex";
    $Carro4->Portas = "4";
    $Carro4->Capacidade_tanque = "50L";
    $Carro4->MostrarDados();


    $Carro5 = new Carro();
    $Carro5->Marca = "Pagani";
    $Carro5->Modelo = "Zonda R";
    $Carro5->Combustivel = "Gasolina";
    $Carro5->Portas = "2";
    $Carro5->Capacidade_tanque = "40L";
    $Carro5->MostrarDados();

?> 