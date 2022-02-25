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
           <a href="Loginfisioterapeuta.php"><img src="img/home/fisio.png" alt="..." class="img-thumbnail"></a>
       </div>
    </div>
    <div class="container criarConta">
            <p class="text-center py-4">Ei! se você for fisioterapeuta e não possui cadastro <a href="criarContaFisio">crie a sua conta aqui</a></p>
    </div>
   
</body>
</html>