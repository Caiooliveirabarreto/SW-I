<?php
    include_once 'lampada.class.php';

    $lamp1 = new Lampada();

    $lamp1->Fabricante = "Philips";
    $lamp1->Tensao = 110;
    $lamp1->Cor = "Branca";
    $lamp1->Potencia = 50;

    $lamp2 = new Lampada();

    $lamp2->Fabricante = "Osram";
    $lamp2->Tensao = 220;
    $lamp2->Cor = "Azul";
    $lamp2->Potencia = 30;
    
    $lamp1->Ligar();
    $lamp1->MostrarDados();
    
    $lamp2->Desligar();
    $lamp2->MostrarDados();
?>