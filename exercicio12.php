<?php
include_once("conectar.php");

$pesquisa = $_POST['matricula'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Pesquisa</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <table border="1" style='width: 50%'>
        <tr>
            <th>NOME</th>
            <th>MATRICULA</th>
            <th>CURSO</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            <th>ENDEREÇO</th>
            <th>CEP</th>
            <th>CIDADE</th>
            <th>ESTADO</th>
            <th>CURSO PARA HORAS</th>
            <th>CARGA HORÁRIA</th>
        </tr>

    <?php
    $sql = "SELECT * FROM alunos WHERE matricula = '$pesquisa'";
    $resultado = mysqli_query($strcon, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($registro = mysqli_fetch_array($resultado)) {
            $nome = $registro['nome'];
            $matricula = $registro['matricula'];
            $curso = $registro['curso'];
            $email = $registro['email'];
            $telefone = $registro['telefone'];  // Corrigido: $telfone para $telefone
            $endereco = $registro['endereco'];
            $cep = $registro['cep'];
            $cidade = $registro['cidade'];
            $UF = $registro['UF'];
            $curso_horas = $registro['curso_horas'];
            $carga_horaria = $registro['carga_horaria'];

            echo "<tr>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $matricula . "</td>";
            echo "<td>" . $curso . "</td>";
            echo "<td>" . $email . "</td>";
            echo "<td>" . $telefone . "</td>";
            echo "<td>" . $endereco . "</td>";
            echo "<td>" . $cep . "</td>";
            echo "<td>" . $cidade . "</td>";
            echo "<td>" . $UF . "</td>";
            echo "<td>" . $curso_horas . "</td>";
            echo "<td>" . $carga_horaria . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='11'>Nenhum aluno encontrado com essa matrícula.</td></tr>";
    }

    mysqli_close($strcon);
    ?>

    </table>


    <br>
    <br>
    <br>
    <a href="index.html" class="botao-link">Voltar ao inicio</a>
</body>
</html>

