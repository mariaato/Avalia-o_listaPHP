<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
        

    <title>Exercício 1 - Verificação de Número Positivo, Negativo ou Zero</title>
    
</head>
<body>
    <h2>Resolução do Exercício 1 <p>- Verificação de Número Positivo, Negativo ou Zero</h2>
    <?php 
    
        $numero = $_POST['numero'];

        if($numero > 0){
            echo "<h1>Número positivo</h1>";
        } else if ($numero < 0) {
            echo "<h1>Número negativo</h1>";
        } else {
            echo "<h1>Valor Zero</h1>";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

       



    ?>
    <a href="index.html" class="botao-link">Voltar ao inicio</a>



</body>
</html>
