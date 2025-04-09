<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <?php
        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];
        $contador = 1;
        $contador2 = 1;
        $linha = "<td></td>";
        $contador2 = $contador/$colunas;
        while($contador <= $colunas+1){
            $contador++;
            echo "<table> <tr>coluna";
                while($contador2 <= $linhas+1){
                    $contador2++;
                    echo "<td> Linha </td>";
                    break;
                }
            echo "</tr></table>";
        }
    ?>
</body>
</html>