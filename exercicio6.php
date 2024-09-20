<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 </title>
    <link rel="stylesheet" href="estilos.css">

    
</head>
<body>
    <h2>Resolução do Exercício 6 <p>-Impressão de Valores em Ordem Crescente</h2>

    <?php 
    
        
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

        if($numero1 > $numero2){
            echo "<h1>$numero2 , $numero1</h1>";
        } else {
            echo "<h1>$numero1 , $numero2</h1>";
        }
        
        
    ?>

<a href="index.html" class="botao-link">Voltar ao inicio</a>


</body>
</html>
