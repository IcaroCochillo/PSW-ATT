
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/impressao.css">
    <title>Impressão</title>
    </head>
<body>

<?php
  include_once ("header.php");
?>


<div class="dados">

<?php


    
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
  

   

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {



        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $curso = $_POST['curso'];


        echo "<h2>Dados do cadastro:</h2>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Idade: $idade</p>";
        echo "<p>Sexo: $sexo</p>";
        echo "<p>CPF: $cpf</p>";
        echo "<p>RG: $rg</p>";
        echo "<p>Curso: $curso</p>";
    }

    ?>


</div>
<?php

include_once ("rodape.php");
?>



</body>
</html>


