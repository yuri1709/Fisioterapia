<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FisioRio-Home</title>
    <style>
    .paciente{
        float:left;
        width:48%;
        background:white;
    }
    .medico{
        float:right;
        width:48%;
        background:white;
    }
    .criarConta{
        margin-top:440px;
    }
</style>
<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <?php
    include_once "head.php";
    ?>
    <div class="container">
       <div class="paciente px-1 text-center">
            <h2 class="text-center bg-light">Paciente</h2>
            <a href="paciente.php"><img src="img/home/paciente.png" alt="..." class="img-thumbnail"></a>
       </div> 
       <div class="medico text-center">
           <h2 class="text-center bg-light">Fisioterapeuta</h2>
           <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm"><img src="img/home/fisio.png" alt="..." class="img-thumbnail"></a>
       </div>
    </div>
    <div class="container criarConta">
            <p class="text-center py-4">Ei! se você for fisioterapeuta e não possui cadastro <a href="criarContaFisio">crie a sua conta aqui</a></p>
    </div>
   

                                                        <!--Modal--> <!--Login Fisioterapeuta-->
  <form action="validarFisioterapeuta.php" method="POST">
  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" name="login" id="login" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Seu nome usuário</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" name="senha" id="senha" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Sua senha</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-default bg-primary">Entrar</button>
      </div>
    </div>
  </div>
</div>
</form>
                                     <!--Modal--> <!--Login usuario-->
</body>
</html>