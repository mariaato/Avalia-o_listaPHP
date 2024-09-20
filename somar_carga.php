<?php
include_once("conectar.php");

// Recebe os dados do formulário
$matricula = $_POST['matricula'];
$carga_adicional = $_POST['carga'];

// Verifica se a matrícula existe e busca a carga horária atual
$sql_busca = "SELECT carga_horaria FROM alunos WHERE matricula='$matricula'";
$resultado = mysqli_query($strcon, $sql_busca);

if (mysqli_num_rows($resultado) > 0) {
    // Recupera a carga horária atual
    $registro = mysqli_fetch_assoc($resultado);
    $carga_atual = $registro['carga_horaria'];

    // Calcula a nova carga horária
    $nova_carga_horaria = $carga_atual + $carga_adicional;

    // Atualiza a carga horária no banco de dados
    $sql_update = "UPDATE alunos SET carga_horaria='$nova_carga_horaria' WHERE matricula='$matricula'";
    if (mysqli_query($strcon, $sql_update)) {
        echo "<br>";
        echo "Carga horária atualizada com sucesso!";
        
        // Aqui estava o problema das aspas
        echo "<table border='1' style='width: 50%;'>";
        echo "<tr>";
        echo   "<th>MATRICULA</th>";
        echo   "<th>CARGA HORARIA</th>";
        echo "</tr>";
    
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
        echo "</table>";
        
    } else {
        echo "Erro ao atualizar: " . mysqli_error($strcon);
    }
} else {
    echo "Matrícula não encontrada!";
}

// Fecha a conexão com o banco de dados
mysqli_close($strcon);
?>
