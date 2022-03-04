<?php
    session_start(); 
    include_once "auth.php";
   
    include_once "conexao.php";
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>
</style>    
<?php  include_once "head.php"; ?>
<body>
  <div class="container c1">
    
  <div class="container">
  <div class="container teste bg-light ">
   <form class="form-group teste" action="atualizarUsuarioGeral.php" method="POST">
  <!-- Login input -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline"> 
        <input type ="checkbox" name="vetor[]" value="checkLogin">
        <label class="form-label" for="form6Example1">Login</label>
        <input type="text" name="login" class="form-control"  placeholder="editar login"/>
       
      </div>
    </div>

  <!-- Nome input -->
  <div class="form-outline mb-4">
    <input type ="checkbox" name="vetor[]" value="checkNome">
    <label class="form-label" for="form6Example4">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Editar nome" />
  </div>

  <!--Sobrenome input -->
  <div class="form-outline mb-4">
    <input type ="checkbox" name="vetor[]" value="checkSobrenome">
    <label class="form-label" for="form6Example4">Sobrenome</label>
    <input type="text" name="sobrenome" class="form-control" placeholder="Editar sobrenome" />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type ="checkbox" name="vetor[]" value="checkEmail">
    <label class="form-label" for="form6Example5">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Editar Email"/>
  </div>

  <!-- Perfil selection -->
  <div class="form-outline mb-4">
    <input type ="checkbox" name="vetor[]" value="checkPerfil">
    <label class="form-label" for="form6Example6">Mudar perfil para</label>
    <select name="perfil"> 
        <option value="medico">Fisioterapeuta</option>
        <option value="paciente">Paciente</option>
      </select>
  </div>

  <!-- Submit button -->
 <div class="py-4">
  <input type="reset" value="Limpar"/ class="btn btn-danger">
  <input type="submit" value="Enviar"/ class="btn btn-primary">
</div> 
<!--responsavel por enviar o idUser para a pagina atualizarUsuarioGeral-->
</form>
</div>
  </div>
</body>
</html>