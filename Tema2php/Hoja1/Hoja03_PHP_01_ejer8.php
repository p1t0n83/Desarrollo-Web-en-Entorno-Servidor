<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero=8;
    $final=$numero;
    //cuenta hasta 1 a partir del numero que tenemos y se va multiplicando por este
    for($i=$numero-1;$i>1;$i--){
    $final*=$i;
    }
    echo "El factorial del numero $numero es $final";
    ?>
</body>
</html>