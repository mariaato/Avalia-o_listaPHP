<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Tabuada de um Número</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <h2>Resolução do Exercício 2 <p>- Tabuada de um Número</h2>
    <?php 
    
        $numero = $_POST['numero'];

        $contador = 1;
        echo "<h3>Tabuada do $numero</h3>";
        echo "<ul>";
    while ($contador <= 10) {
       
        echo "<li>$numero x $contador = " . $numero*$contador . "</li><br>";
        $contador++; 
    }
    echo "</ul>";
   
    ?>

<a href="index.html" class="botao-link">Voltar ao inicio</a>


</body>
</html>
