<?php
include_once("conectar.php");

$pesquisa = $_POST['nome'];

$sql = "DELETE FROM alunos WHERE nome = '$pesquisa'";

$resultado = mysqli_query($strcon, $sql);
echo "<br>";
echo "Exclusão realizada com sucesso!";
mysqli_close($strcon);

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1><a href='index.html' class='botao-link'>Voltar ao inicio</a></h1>";

?>