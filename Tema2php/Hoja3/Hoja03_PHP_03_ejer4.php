<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores de $_SERVER</title>
</head>
<body>
    <h1>Valores de $_SERVER</h1>
    
    <table>
        <tr>
            <th>Variable</th>
            <th>Valor</th>
        </tr>
        <?php
        //los $ que ya estan implementados son arrays especiales
        // Recorrer el array $_SERVER con foreach
        // para sacar tambien la clave lo ponemos con la flecha =>
        foreach ($_SERVER as $key => $valor) {
            echo "<tr>".
             "<td>" . $key . "</td>".
             "<td>" . $valor . "</td>".
             "</tr>";
        }
        ?>
    </table>
</body>
</html>
