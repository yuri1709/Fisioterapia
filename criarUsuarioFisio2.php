<?php session_start();
include_once "conexao.php";
  $email = $_SESSION["email"];
  $sql = "select * from usuario where email='$email'";
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
  <title>Criar Usuário</title>
</head>
<style>
.c3{
  padding-top:20px;
}
</style>    
<?php  include_once "head.php"; ?>
<body>
<div class="container c1">
  <h3 class="text-center">Vamos lá <?php echo $reg['nome'];?>, estamos quase terminando!<a href="index.php"><button type="button" class="btn btn-success float-right">Sair</button></a></h3>
     
  <div class="container c2">
  <div class="container c3">
    <h6 class="text-center">Preencha o formulário abaixo:</h6>
  </div>  
  <div class="container teste bg-light my-4 ">
   
    <form class="form-group teste" action="cadastrarUsuarioFisio2.php" method="POST">
        
    <!-- CPF E CREDITO -->
        <div class="form-row my-4 ">
            <div class="col-md-4">
                <label for="" class="form-label float-left">CPF</label>
                <input type="number" name="cpf" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">CREFITO</label>
                <input type="number" name="crefito" class="form-control" required>
            </div>
        </div>
        <!-- Data-de-Nascimento -->
        <div class="form-row my-4">
            <div class="col-md-2">
              <label class="form-label">Data de nascimento</label>
              <input type="date" name="dataNasci" class="form-control" required> <br>
            </div>
        
        <!-- sexo -->
        <div class="row mx-0"><label for="">Sexo:</label>          
            <div class="col-md form-check mx-4">
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="h" checked required>
                <label class="form-check-label" for="exampleRadios1">Masculino</label>                               
            </div>  
            <div class="col-md form-check mx-4">
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="f" checked required>
                <label class="form-check-label" for="exampleRadios1">Feminino</label>                               
            </div>  
        </div>
    </div> 
    </div>
      <div class="text-left mx-2"><button type="button" class="btn btn-primary ">Next</button></div>
    </form>
  
  </div>
</div>
</body>
</html>