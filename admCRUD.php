<?php
    include_once "head.php";
    include_once "conexao.php";
    session_start();
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
       
    </style>
    <link rel="stylesheet" href="css/admCRUD.css">
</head>
<body>
<section>
  <div class="container c1">
    <h2>Painel Admin</h2>
    <div class="container painel my-4">
        <form class="form my-2" action="" method="POST">
            <div class="form-group search">
                <input type="text" name="nome" id="nome" class="form-control" placeholder="buscar o nome do usuário"> 
            </div>
            <button type="submit" class="btn btn-primary mx-2 px-2">Buscar</button>
            
            <div class="form-group perfil">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option value="medico">Fisioterapeuta</option>
            <option value="paciente">Paciente</option>
            </select>
            </div>
       
        <!--Mostrar resultado da pesquisa-->
        <div class="container resultado">
        <?php 
                $nome = $_POST["nome"]?? "";  //esse ?? é um operador
                $sql = "select * from usuario WHERE nome ='$nome'";
                $result = mysqli_query($con,$sql);
              
                if(mysqli_num_rows($result)>0){
                    while($linha = mysqli_fetch_array($result)){
                        echo "<strong><br>Perfil:</strong> ".strtoupper($linha["perfil"]);
                        echo "<br><strong>Nome:</strong> ".$linha["nome"];
                        echo " ".$linha["sobrenome"];
                        echo "<br><strong>Login:</strong> ".$linha["login"];
                        echo "<br><strong>E-mail:</strong> ".$linha["email"];
                    }
                }else{
                    echo"nada foi encontrado";
                }
            ?>
        </div>


        <div class="container mostrarTodos">
            <h6 class="text-center">mostrar todos os resultados</h6>
        </div>
        
        <div class="container botoes py-4">
            <div class="row text-center">
                <div class="col">
                    <button type="submit" class="btn btn-success mx-2 px-2">CRIAR</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-warning mx-2 px-2">EDITAR</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-danger mx-2 px-2">EXLUIR</button>
                </div>
            </div>
        </div>
        </form>
    </div>
  </div>
  </section> 
 



 <!-- <div class="container c2">
 <a href="cadastroPaciente.php">Cadastrar Paciente</a> </br>
 <a href="editarPaciente.php">Editar cadastro</a> </br>
 <a href="sair.php">Sair</a>
 </div> -->
</body>
</html>