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
<br><br>
<h4>Preencha os Campos Abaixo:</h4><br><br>


<form action="conexao.php" method="POST">

  <div class="form-row">
    <div class="col">
    <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>
    
    <div class="col">
    <label for="inputEmail4">Sobrenome</label>
      <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
    </div>

  <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="Senha">
    </div>
  </div>

  <div class="form-group">
  <label for="inputEmail4">Nome do Paciente</label>
      <input type="text" class="form-control" name="nomedopaciente" placeholder="Nome do Paciente">
  </div>

  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="Rua .  .  .  , nº ">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade / Estado</label>
      <input type="text" class="form-control" id="inputCity" name="cidade" placeholder="Cidade / Estado">
    </div>

    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP" name="cep" placeholder="CEP">
    </div>
  </div>
  <br><br>
  <button type="submit" class="btn btn btn-outline-primary" name="submit">Acessar</button>
  <a href="ivy.php" class="btn btn-outline-primary">Voltar ao Início</a>
  <a href="cadastro.php" class="btn btn-outline-danger">Limpar todos os Campos!</a>

</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>