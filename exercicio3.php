

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    

<?php

function calcularFatorial($n){
    if($n <=1){
        return 1;
    }else{
        return $n * calcularFatorial($n - 1);
    }
}

$numero = $_POST['numero'];

$resultado = calcularFatorial($numero);
echo "<h1>o Fatorial de $numero é $resultado</h1>";
echo "<a href='index.html' class='botao-link'>Voltar ao inicio</a>";

?>
</body>
</html>