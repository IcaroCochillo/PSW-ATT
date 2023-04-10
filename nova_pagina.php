<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include_once ("header.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $curso = $_POST['curso'];

          }
    ?>


    <form method="POST" class="form" action="impressao.php">
      <div class="row">
      
        <div class="column">
         <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required><br>
          

          <label for="idade">Idade:</label>
          <input type="number" id="idade" name="idade" required><br>
        </div>
        
        <div class="column">
          <label for="sexo">Sexo:</label>
          <select id="sexo" name="sexo" required>
            <option value="">-- Selecione --</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            <option value="O">Outro</option>
          </select><br>

          <label for="cpf">CPF:</label>
          <input type="text" id="cpf" name="cpf" required><br>
        </div>
        
        <div class="column">
          <label for="rg">RG:</label>
          <input type="text" id="rg" name="rg" required><br>

          <label for="curso">Curso:</label>
          <input type="text" id="curso" name="curso" required><br>

          </div>
          
          <input type="submit" value="Cadastrar">
        </div>
    </form>

<?php
    
    include_once ("rodape.php");
 
    ?>

</body>
</html>

