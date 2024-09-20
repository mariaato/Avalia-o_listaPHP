<?php
include_once("conectar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Exercicio 12</title>
    <link rel="stylesheet" href="estilos.css">


</head>
<body>
<table border="1" style='width: 50%'>
        <tr>
            <th>NOME</th>
            <th>MATRICULA</th>
            <th>EMAIL</th>
        </tr>
    
    <?php
    $sql = "SELECT * FROM alunos";
    $resultado = mysqli_query($strcon, $sql);
    while($registro = mysqli_fetch_array($resultado)){
        $nome = $registro['nome'];
        $matricula = $registro['matricula'];
        $email = $registro['email'];
        echo "<tr>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $matricula . "</td>";
        echo "<td>" . $email . "</td>";
        echo "</tr>";
    }
    mysqli_close($strcon);
    echo "</table>";
    ?>
    <form name="exclui" action="excluir.php" method="post">
        <p>Digite o nome que deseja excluir: 
            <input type="text" name="nome" />
        </p>
        <input type="submit" name="botao" value="Enviar"/>
        </form>


        <br>
    <br>
    <br>
</body>
</html>