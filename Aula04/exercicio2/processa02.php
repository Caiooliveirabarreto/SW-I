<?php
    $n1 = $_REQUEST['n1'];
    $n2 = $_REQUEST['n2'];
    $n3 = $_REQUEST['n3'];
    $maiorNum = 0;
    if ($maiorNum < $n1){
        $maiorNum = $n1;
    }
    if ($maiorNum < $n2){
        $maiorNum = $n2;
    }
    if ($maiorNum < $n3){
        $maiorNum = $n3;
    }
    echo "<h1>O maior número é: $maiorNum</h1>";

        
?>