<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <link rel="stylesheet" href="estilos.css">

    
</head>
<body>
    <h2>Resolução do Exercício 7<p>-Comparação de Valores A e B</h2>

    <?php 
    
        
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

        if($numero1 > $numero2){
            echo "<h1>A maior que B</h1>";
        }else if($numero1 < $numero2){
            echo "<h1>A menor que B</h1>";
        }else{
            echo "<h1>A igual a B</h1>";
        }
        
        
    ?>
    <br>
    <br>
    <br>
    <a href="index.html" class="botao-link">Voltar ao inicio</a>


</body>
</html>
