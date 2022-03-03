<?php
  session_start();
  include 'auth.php';
  include 'head.php';
  include_once "conexao.php";

  $login = base64_decode($_GET["nome"]);
  $idUser = base64_decode($_GET["idUser"]);
  
  $sql = "select * from usuario where idUser=".$idUser;
  //excutar
  $rs = mysqli_query($con,$sql);
  if(mysqli_num_rows($rs) == 1){
    $reg = mysqli_fetch_array($rs);
}
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
<body>
  <div class="container c1">
    <h2><?php echo "Editar usuário: ".$login; ?></h2>
    
  <div class="container-flex">
  <div class="container bg-light">
   <form class="form-group" action="atualizarUsuarioGeral.php" method="POST">
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


 <!-- <div class="form-outline mb-4">
    <label class="form-label" for="form6Example8">Cursos:</label></br>
  <input type ="checkbox" name="vetor[]" value="PHP"> PHP
  <input type ="checkbox" name="vetor[]" value="Designer"> Designer
  <input type ="checkbox" name="vetor[]" value="LARAVEL"> LARAVEL
  <input type ="checkbox" name="vetor[]" value="MYSQL"> MYSQL
  <input type ="checkbox" name="vetor[]" value="ORACLE"> ORACLE
        <br/>
  </div> -->

  <!-- Submit button -->
 <div class="py-4">
  <input type="reset" value="Limpar"/ class="btn btn-danger">
  <input type="submit" value="Enviar"/ class="btn btn-primary">
</div> 
<input type="hidden" name="idUser" value="<?php echo $reg["idUser"];?>;"/> 
</form>
</div>
  </div>
</body>
</html>