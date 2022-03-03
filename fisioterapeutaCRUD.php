<?php 
session_start();//at the very top of the page
include_once "auth.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fisioterapeuta</title>
    <style>
    .c1{
        padding-bottom:80px;
    }
    .paciente{
        float:left;
        width:40%;
        background:white;
    }
    .medico{
        float:right;
        width:40%;
        background:white;
    }
</style>
</head>
<body>
<?php
    include_once "head.php";
?>
  <div class="container c1">
        <h2>Área do fisioterapeuta</h2>
  </div>
 <div class="container c2">
 <a href="cadastroPaciente.php">Cadastrar Paciente</a> </br>
 <a href="editarPaciente.php">Editar cadastro</a> </br>
 <a href="sair.php">Sair</a>
 </div>
</body>
</html>

