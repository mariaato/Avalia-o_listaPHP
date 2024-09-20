<?php
include_once("conectar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Exercicio 11</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
<table border="1" style='width: 50%'>
        <tr>
            <th>MATRICULA</th>
            <th>CARGA HORARIA</th>
            
        </tr>
    
    <?php
    $sql = "SELECT * FROM alunos";
    $resultado = mysqli_query($strcon, $sql);
    while($registro = mysqli_fetch_array($resultado)){
        $matricula = $registro['matricula'];
        $carga_horaria = $registro['carga_horaria'];
        
        echo "<tr>";
        echo "<td>" . $matricula . "</td>";
        echo "<td>" . $carga_horaria . "</td>";
        echo "</tr>";
    }
    mysqli_close($strcon);
    echo "</table>";
    ?>
    <form name="somar" action="somar_carga.php" method="post">
        <p>Digite a matricula que deseja adiconar horas complementares: 
            <input type="text" name="matricula" />
        </p>

        <p>Digite a carga horaria: 
            <input type="text" name="carga" />
        </p>
        <input type="submit" name="botao" value="Enviar"/>
        </form>

        <a href="index.html" class="botao-link">Voltar ao inicio</a>

</body>
</html>