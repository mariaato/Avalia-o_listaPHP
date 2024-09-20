<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <h2>Exercício 9 - Verificação de Maioridade</h2>
    <?php 
    
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

       if($idade>18){
        echo "<h1>$nome tem mais que 18 anos e tem $idade anos </h1";

       } else if ($idade<18) {
        echo "<h1>$nome é menor de 18 anos e tem $idade anos</h1> ";
       }else{
        echo "$nome tem $idade anos ";
       }
        

        
        
        
    ?>


<br>
    <br>
    <br>
    <a href="index.html" class="botao-link">Voltar ao inicio</a>
</body>
</html>
