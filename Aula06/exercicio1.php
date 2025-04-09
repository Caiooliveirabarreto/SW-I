

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <style>
        table, tr, td, th{
            border: 2px solid black;
        }
        .impar{
            background-color: grey;
        }
        .par{
            background-color: lightblue;
        }

    </style>
</head>
<body>
    <table>
        <?php
            for($i = 1; $i <= 8; $i++) {
                if ($i % 2 == 0) {
                    echo "<tr>
                            <td class='par'> Linha $i Coluna 1</td>
                            <td class='par'> Linha $i Coluna 2</td>
                            <td class='par'> Linha $i Coluna 3</td>
                            <td class='par'> Linha $i Coluna 4</td>
                          </tr>";
                }
                else{
                    echo "<tr>
                            <td class='impar'> Linha $i Coluna 1</td>
                            <td class='impar'> Linha $i Coluna 2</td>
                            <td class='impar'> Linha $i Coluna 3</td>
                            <td class='impar'> Linha $i Coluna 4</td>
                          </tr>";
                }
            }
        ?>
    </table>
</body>
</html>