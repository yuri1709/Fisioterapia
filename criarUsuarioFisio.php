<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Criar Usuário</title>
</head>
<style>

</style>    
<?php  include_once "head.php"; ?>
<body>
  <div class="container c1">
  <h2 class="text-center">Usuário Fisioterapeuta<a href="index.php"><button type="button" class="btn btn-success float-right">Sair</button></a></h2>
     
  <div class="container my-2">
  <div class="container teste bg-light ">
   
  <form class="form-group teste" action="cadastrarUsuarioFisio.php" method="POST">
  
    <!-- Nome input -->
    <div class="form-outline mb-4">
  
      <label class="form-label" for="form6Example4">Nome</label>
      <input type="text" name="nome" class="form-control" placeholder="nome" required />
    </div>

    <!--Sobrenome input -->
    <div class="form-outline mb-4">
      
      <label class="form-label" for="form6Example4">Sobrenome</label>
      <input type="text" name="sobrenome" class="form-control" placeholder="sobrenome" required />
    </div>

    <!-- Login input -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline"> 
          <label class="form-label" for="form6Example1">Login</label>
          <input type="text" name="login" class="form-control"  placeholder="login" required />
        </div>
      </div>

      <!-- Senha input -->
    <div class="row mb-4 py-2">
      <div class="col">
        <div class="form-outline"> 
          <label class="form-label" for="form6Example1">senha</label>
          <input type="password" name="senha" id="senha" class="form-control"  placeholder="Criar senha" onKeyPress="validatePassword()" required />
        </div>
      </div>

    <!-- Confirmar senha input -->
    <div class="row mb-4 py-2">
      <div class="col">
        <div class="form-outline"> 
          <label class="form-label" for="form6Example1">Confirmar senha</label>
          <input type="password" name="confirmarSenha" id="confirmarSenha" class="form-control"  placeholder="Redigite a sua senha" onKeyPress="validatePassword()" required />
        </div>
      </div>
    
      <!-- script de verificação de senha -->
      <script>
        var password = document.getElementById("senha");
          var confirm_password = document.getElementById("confirmarSenha");
        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Senhas diferentes!");
            document.getElementById("senha").style.borderColor="#FF0000";//vermelho
            document.getElementById("confirmarSenha").style.borderColor="#FF0000";
          } else {
            confirm_password.setCustomValidity('');
            document.getElementById("senha").style.borderColor="#028200";//verde
            document.getElementById("confirmarSenha").style.borderColor="#028200";
          }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
      </script>

    <!-- Email input -->
    <div class="form-outline mb-4 py-2">

      <label class="form-label" for="form6Example5">email</label>
      <input type="email" name="email" class="form-control" placeholder="Email" required/>
    </div>

    <!-- Submit button -->
  <div class="py-4">
    <input type="reset" value="Limpar"/ class="btn btn-danger">
    <input type="submit" value="Next"/ class="btn btn-primary float-right">
  </div> 
</form>
</div>
  </div>
</body>
</html>