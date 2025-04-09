<?php

    $produtos = [
        [
            "Nome" => "Notebook",
            "Preço" => 4299,
            "Categoria" => "Eletrônicos"
        ],
        [
            "Nome" => "Camisa Designer",
            "Preço" => 89,
            "Categoria" => "Roupas"
        ],
        [
            "Nome" => "Smartphone",
            "Preço" => 2000,
            "Categoria" => "Eletrônicos"
        ]
    ];
    $categorias = array_unique(array_column($produtos, 'Categoria'));
    $nome = array_unique(array_column($produtos, 'Nome'));
    $preco = array_unique(array_column($produtos, 'Preço'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th{
            color: #00008B;
        }
        td{
            color: #add8e6;
        }
        tr{
            color: #0000ff:
        }
    </style>
</head>
<body>
    <?php
        echo "<table>";
            foreach($produto as $produtos){
                echo"<tr>
                        <th>
                        ".$nome."
                        </th>
                        <th>
                        ".$preco."
                        </th>
                        <th>
                        ".$categorias."
                        </th>
                    </tr>";
            }
        echo "</table>";
    ?>
</body>
</html>