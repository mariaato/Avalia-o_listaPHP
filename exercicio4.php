<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 </title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body> 
    <h2>Resolução do Exercício 4 <p>- Calculadora com SwitchCase</h2>
    <?php 
    
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];

        switch($operacao){
            case "1":
                echo "$numero1 + $numero2 = " . $numero1 + $numero2 ;
                
                break;
            case "2":
                echo "$numero1 - $numero2 = " . $numero1 - $numero2 ;
                break;
            case "3":
                echo "$numero1 x $numero2 = " . $numero1 * $numero2 ;
                break;
            case "4":
                echo "$numero1 / $numero2 = " . $numero1 / $numero2 ;
                break;
            
            default:
                echo "Operação invalida";
        }
        
        
        
    ?>
    <br>
    <br>
        <a href="index.html" class="botao-link">Voltar ao inicio</a>

</body>


</html>
