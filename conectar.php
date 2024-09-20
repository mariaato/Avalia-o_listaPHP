<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "avaliação";

$strcon = mysqli_connect($servername, $username, $password, $database);

if(!$strcon){
    die("Falha na Conexão: " . mysqli_connect_error());

}
echo "Sucesso na Conexão";


?>