<?php session_start();
include_once "conexao.php";
  $email = $_SESSION["email"];
  $sql = "select * from usuario where idUser=".$email;
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

</style>    
<?php  include_once "head.php"; ?>
<body>
<div class="container c1">
  <h2 class="text-center">Vamos lá <?php echo $reg['nome'];?> , estamos quase terminando<a href="index.php"><button type="button" class="btn btn-success float-right">Sair</button></a></h2>
     
  <div class="container c2">
  <div class="container teste bg-light my-4 ">
   
    <form class="form-group teste" action="cadastrarUsuarioFisio.php" method="POST">
        <div class="form-row my-4 ">
            <div class="col-4">
                <label for="" class="form-label float-left">CPF</label>
                <input type="number" name="cpf" class="form-control">
            </div>
            <div class="col-12">
                <label for="" class="form-label">CRM</label>
                <input type="number" name="crm" class="form-control form-control-sm">
            </div>
        </div>
   <button type="submit">SUBMIT</button>
    </form>
  </div>
  </div>
</div>
</body>
</html>