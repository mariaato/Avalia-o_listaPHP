<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 </title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <h2>Resolução do Exercício 5 <p>-Verificação de Número Par ou Ímpar</h2>
    <?php 
    
        $numero = $_POST['numero'];

        if($numero % 2 == 0){
            echo "<h1>Número par</h1>";
        } else {
            echo "<h1>Número impar</h1>";
        }
        
        
    ?>
    <a href="index.html" class="botao-link">Voltar ao inicio</a>



</body>
</html>
