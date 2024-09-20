<?php
include("conexao1.php");
    //Verifica se o metodo de requisição é post

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Recebe os dados enviados pelo formulário 
        
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $curso = $_POST['curso'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $UF = $_POST['UF'];
        $curso_horas = $_POST['curso_horas'];
        $carga_horaria = $_POST['carga_horaria'];
    }
   
        $sql = "INSERT INTO alunos(nome, matricula, curso, email, telefone, endereco, cep, cidade, UF, curso_horas, carga_horaria) VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$UF', '$curso_horas', '$carga_horaria')";
        
        if(mysqli_query($conexao, $sql)){
            echo "Usuário cadastrado com sucesso";
            echo" <br>";
            echo "<br>";
            echo "<a href='index.html' class='botao-link'>Voltar ao inicio</a>";
        


        }
        else{
            echo "Erro".mysqli_connect_error($conexao);
        }
        mysqli_close($conexao);
        
    ?>  
        
