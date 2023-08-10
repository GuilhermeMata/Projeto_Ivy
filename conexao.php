<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ivy2";

$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_errno()) {
    echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
    exit();
}

if (isset($_POST['submit'])) {
  include_once('conexao.php');

  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $nomedopaciente = $_POST['nomedopaciente'];
  $endereco = $_POST['endereco'];
  $cidade = $_POST['cidade'];
  $cep = $_POST['cep'];

  $result = mysqli_query($conexao, "INSERT INTO cliente (nome, sobrenome, email, senha, nomedopaciente, endereco, cidade, cep) 
  VALUES ('$nome', '$sobrenome', '$email', '$senha', '$nomedopaciente', '$endereco', '$cidade', '$cep')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Ivy System</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand h2">Ivy System</a>
 

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown" href="ivy.php">
          Home
        </a>
</div>
</nav>
<br><br><br><br>
<div class="jumbotron">
  <h1 class="display-4">Obrigado por se cadastrar em nosso sistema.</h1>
  <p class="lead">Estamos felizes em tê-lo(a) como membro.</p>
  <hr class="my-4">
  <p>Seu cadastro foi concluído com sucesso. Seja Bem-vindo.</p>
  <a class="btn btn-outline-primary my-2 my-sm-0" href="ivy.php" role="button">Volte a Página Inicial</a>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>