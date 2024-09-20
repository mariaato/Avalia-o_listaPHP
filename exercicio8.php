<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <h2>Resolução do Exercício 8 <p>-Cálculo da Média Final de um Aluno</h2>

    <?php 
    
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $notas = array($nota1, $nota2, $nota3);


        $media = (($notas[0]*2)+($notas[1]*2)+($notas[2]*1))/5;
         if($media >=7){
            echo "<h1>APROVADO</h1>";
         }else{
            echo "<h1>REPROVADO</h1>";
         }
    ?>

    <br>
    <br>
    <br>
    <a href="index.html" class="botao-link">Voltar ao inicio</a>



</body>
</html>
